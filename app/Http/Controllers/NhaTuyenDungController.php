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

class NhaTuyenDungController extends Controller {
    public function tuyendungdoimatkhau() {
        $users = auth()->user();
        return view('taikhoan.tuyendung_doipass',compact('users'));
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
    public function timHoSo(){
        $users = auth()->user();
        $categories = Category::all();
        $locations = Location::all();
        return view('timkiem.timkiemhoso',compact('users','categories','locations'));
    }
    public function xulytimHoSo(){
        $categories = Category::all();
        $locations = Location::all();
        if (request()->has('keyword')) {
            $job = Curriculumvita::where('recent_category_id', 'like', '%' . request()->get('keyword') . '%');
            
            if (request()->has('category_id') && !empty(request()->get('category_id'))) {
                $job->where('id_category', '=', request()->get('category_id'));
            }
            
            if (request()->has('expected_position_id') && !empty(request()->get('expected_position_id'))) {
                $job->where('expected_position_id', '=', request()->get('expected_position_id'));
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
    }
     public function xemchitiet($id){
        $job = Job::find($id);
        return view('timkiem.xemchitiethoso', compact('job'));
    }
}
    