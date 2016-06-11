<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builder;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Request\Login;
use App\User;
use App\Category;
use App\Location;
use App\Curriculumvita;
use App\Job;
use App\Company;
use App\Skill;
use App\Language;
class NhaTuyenDungController extends Controller {

    public function tuyendungdoimatkhau() {
        $users = auth()->user();
        return view('taikhoan.tuyendung_doipass', compact('users'));
    }

    public function xuLytuyendungdoimatkhau() {

        $dulieu = request()->all();
        $quyluat = [
            'password_news' => 'required',
            'password_confirmation' => 'required|same:password_news',
        ];

        $thongbao = [

            'password_news.required' => 'Mật khẩu bắt buộc phải nhập',
            'password_confirmation.required' => 'Nhập lại mật khẩu bắt buộc phải nhập',
            'password_confirmation.same' => 'Nhập lại mật khẩu phải trùng ở trên',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);
        if ($xuly->fails()) {
            return redirect()->route('nhatuyendung_doimatkhau')->withErrors($xuly);
        }
        $dulieu['id_user'] = auth()->user()->id;

        $user = auth()->user();
        if (!\Hash::check($dulieu['password'], $user->password)) {
            return redirect()->route('nhatuyendung_doimatkhau')->withErrors([
                        'password' => "Mật khẩu hiện tại không đúng"
            ]);
        }

        $user->password = \Hash::make($dulieu['password_confirmation']);
        $user->save();
        return redirect()->route('dangnhap');
        //\Session::flash('sauccess', 'Sua thanh cong');
        //return redirect()->back();
    }

    public function timHoSo() {
        $users = auth()->user();
        $categories = Category::all();
        $locations = Location::all();
        return view('timkiem.timkiemhoso', compact('users', 'categories', 'locations'));
    }

    public function xulytimHoSo() {
        $categories = Category::all();
        $locations = Location::all();
        //if (request()->has('keyword')) {
            $job = Curriculumvita::where('expected_position_id', 'like', '%' . request()->get('keyword') . '%');

            if (request()->has('category_id') && !empty(request()->get('category_id'))) {
                $job->where('id_category', '=', request()->get('category_id'));
            }

            if (request()->has('recent_position_id') && !empty(request()->get('recent_position_id'))) {
                $job->where('recent_position_id', '=', request()->get('recent_position_id'));
            }
//            if(request()->has('keyword1')){
//            $job = Curriculumvita::where('name', 'like', '%' . request()->get('keyword1') . '%');
//            }

            if (request()->has('highes_edu') && !empty(request()->get('highes_edu'))) {
                $job->where('highes_edu', '=', request()->get('highes_edu'));
            }

            if (request()->has('location_id') && !empty(request()->get('location_id'))) {
                $job->where('id_location', '=', request()->get('location_id'));
            }

            if (request()->has('experience') && !empty(request()->get('experience'))) {
                $job->where('experience', '=', request()->get('experience'));
            }
            $jobs = $job->get();
            return view('timkiem.hosoketqua', compact('jobs', 'categories', 'locations'));
        
    }

    public function xemchitiet($id) {
        $cv = Curriculumvita::find($id);
        $language = Curriculumvita::all();
        return view('timkiem.xemchitiethoso', compact('cv', 'language'));
    }

    public function dangtin() {
        $users = auth()->user();
        //$users = User::all();
        $job = Job::all();
        $companies = Company::all();
        $locations = Location::all();
        $skills = Skill::all();
        $categories = Category::all();
        $languages = Language::all();
        return view('dangtintuyendung.dangtin', compact('users', 'job', 'companies', 'locations', 'skills', 'categories', 'languages'));
    }

    public function xulydangtin() {
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            'id_location' => 'required',
            'id_skill' => 'required',
            'salary' => 'required',
            'id_category' => 'required',
            'id_language' => 'required',
            'experience' => 'required'
        ];

        $thongbao = [
            'name.required' => 'Tên không được để trống',
            'id_location.required' => 'Địa điểm không được để trống',
            'id_skill.required' => 'Kỹ năng không được để trống',
            'salary.required' => 'Mức lương không được để trống',
            'id_category.required' => 'Nghành nghề không được để trống',
            'id_language.required' => 'Yêu cầu ngôn ngữ không được để trống',
            'experience.required' => 'Kinh nghiệm không được để trống'
        ];


        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('dangtin')->withErrors($xuly);
        }

        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['id_user'] = auth()->user()->id;
        $dulieu['id_company'] = auth()->user()->company->id;
//        $user = auth()->user();
        Job::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    public function taocongty() {
        $users = auth()->user();
        $companies = Company::all();
        $locations = Location::all();
        return view('dangtintuyendung.congty', compact('users', 'companies', 'locations'));
    }

    public function xulytaocongty() {
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:companies',
            'phone' => 'required|between:10,12',
        ];

        $thongbao = [
            'name.required' => 'Tên không được để trống',
            'address.required' => 'Địa chỉ không đúng định dạng',
            'email.email' => 'Email không đúng định dạng',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.unique' => 'Hiện tại email này đã có',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.between' => 'Số điện thoại không đúng định dạng',
        ];


        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('ntd_congty')->withErrors($xuly);
        }

        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['user_id'] = auth()->user()->id;
        //$dulieu['id_company'] = auth()->user()->company->id;
//        $user = auth()->user();
        Company::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    public function quanlyviec() {
        $user = auth()->user();
        $jobs = Job::where('id_user', $user->id)->get();
        return view('dangtintuyendung.vieclam', compact('jobs', 'user'));
    }
    public function xemhosotuyendung($id){
        $user = auth()->user();
        $job = Job::find($id);
        $jobCvs = $job->jobcv;
        return view('dangtintuyendung.xemhosotuyendung', compact('user','job','jobCvs'));
    }
    public function suathongtincongty(){
        $users = auth()->user();
        $company = Company::where('user_id', $users->id)->first();
        $locations = Location::all();
        return view('dangtintuyendung.suathongtincongty')->with([
                    'users' => $users,
                    'company' => $company,
                    'locations' => $locations
        ]);
    }
    public function xulysuathongtincongty(){
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone'=> 'required|between:10,12',
        ];

        $thongbao = [
            'name.required' => 'Tên không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.required' => 'Email bắt buộc phải nhập',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.between' => 'Số điện thoại không đúng định dạng',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('ntd_congty_sua')->withErrors($xuly);
        }
        $users = auth()->user();
        $company = Company::where('user_id', $users->id)->first();
        $company->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }
    

    public function suathongtinnhatuyendung(){
        $users = auth()->user();
        return view('dangtintuyendung.thongtinnhatuyendung')->with([
                    'users' => $users
        ]);
    }
    public function xulysuathongtinnhatuyendung(){
        $dulieu = request()->all();
        $quyluat = [
            'full_name' => 'required',
            'brithday' => 'required',
            'phone'=> 'required|between:10,12',
            'address'=> 'required'
            
        ];

        $thongbao = [
            'full_name.required' => 'Tên không được để trống',
            'brithday.required' => 'Ngày sinh không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.between' => 'Số điện thoại không đúng định dạng',
            'address.required' => 'Địa chỉ không được để trống'
        ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);
        if ($xuly->fails()) {
            return redirect()->route('nhatuyendung_taikhoan_suathongtinnhatuyendung')->withErrors($xuly);
        }
        $dulieu['id_user'] = auth()->user()->id;
        
        $user = auth()->user();
        //$user->update($dulieu);
        if (!\Hash::check($dulieu['password'], $user->password)) {
            return redirect()->route('nhatuyendung_taikhoan_suathongtinnhatuyendung')->withErrors([
                'password' => "Mật khẩu hiện tại không đúng"
            ]);
        } 
        //$user->update($xuly);
        $user->fill($dulieu);
        $user->password = \Hash::make($dulieu['password']);
        $user->save();
        \Session::flash('success', 'Cập nhập thành công');

        return redirect()->back();
    }
    public function xemttntd(){
         $user = auth()->user();
        return view('dangtintuyendung.xemthongtinnhatuyendung',compact('user'));
    }
    public function xemttcongty(){
         $user = auth()->user();
         //$company = Company::all();
         $company = Company::where('user_id', $user->id)->first();
        return view('dangtintuyendung.xemttcongty',compact('user','company'));
    }
    public function edit($id) {
        $job = Job::find($id);
        $companies = Company::all();
        $locations = Location::all();
        $skills = Skill::all();
        $categories = Category::all();
        $languages = Language::all();
        return view('dangtintuyendung.suacongviec')->with([
                    'job' => $job,
                    'companies' => $companies,
                    'locations' => $locations,
                    'skills' => $skills,
                    'categories' => $categories,
                    'languages' => $languages
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'id_company' => 'required',
            'id_location' => 'required',
            'id_skill'=> 'required',
            'salary' => 'required',
            'id_category' => 'required',
            'id_language' => 'required',
            'experience' => 'required'
        ];

        $thongbao = [
            'id_company.required' => 'Tên công ty không được để trống',
            'id_location.required' => 'Địa điểm không được để trống',
            'id_skill.required' => 'Kỹ năng không được để trống',
            'salary.required' => 'Mức lương không được để trống',
            'id_category.required' => 'Nghành nghề không được để trống',
            'id_language.required' => 'Yêu cầu ngôn ngữ không được để trống',
            'experience.required' => 'Kinh nghiệm không được để trống'
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('dangtin')->withErrors($xuly);
        }
        
        $job = Job::find($id);
        $job->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $job = Job::find($id);
        $job->delete();
        
        return redirect()->back();
    }
    
    

        public function show($id){
        $job = Job::find($id);
        return view('dangtintuyendung.xemcongviec')->with([
                    'job' => $job,
            ]);
    }

}
