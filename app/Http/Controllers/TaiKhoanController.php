<?php 

namespace App\Http\Controllers;
use Illuminate\Database\Query\Builder;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Request\Login;
use App\User;
use App\Category;

class TaiKhoanController extends Controller {
    
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
        return redirect()->route('dangnhap.nhatuyendung');
        //\Session::flash('sauccess', 'Sua thanh cong');

        //return redirect()->back();
    }
    
    public function doiMatKhau() {
        $users = auth()->user();
        return view('taikhoan.doipass',compact('users'));
    }

    public function xuLyDoiMatKhau() {
        
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
            return redirect()->route('doimatkhau')->withErrors($xuly);
        }
        $dulieu['id_user'] = auth()->user()->id;
//        $user = new User;
//        $users->password = \Hash::make($dulieu['password_confirmation']);
//        $users->save();
       // return redirect()->route('dangnhap');
        
        $user = auth()->user();
       //dd(\Hash::make('123123'));
        if (!\Hash::check($dulieu['password'], $user->password)) {
            return redirect()->route('doimatkhau')->withErrors([
                'password' => "Mật khẩu hiện tại không đúng"
            ]);
        }     
        
        $user->password = \Hash::make($dulieu['password_confirmation']);
        $user->save();
        return redirect()->route('dangnhap');
        //\Session::flash('sauccess', 'Sua thanh cong');

        //return redirect()->back();
    }
//    public function postUserPasswordChange(){
//        $validator = Validator::make(Input::all(), User::$change_password_rules);
//        if ($validator->passes()) {
//
//            $user = UserEventbot::findOrFail(Auth::user()->id);
//
//            $user->password = Hash::make(Input::get('new_password'));
//            $user->save();
//            return Redirect::to('users/change-password');
//        } else {
//            return Redirect::to('users/change-password')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
//        }
//    }

    public function suathongtincanhan() {
        $users = auth()->user();
        return view('taikhoan.suathongtincanhan')->with([
                    'users' => $users
        ]);
    }

    public function xulysuathongtincanhan() {
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
            return redirect()->route('taikhoan_suathongtincanhan')->withErrors($xuly);
        }
        $dulieu['id_user'] = auth()->user()->id;
        
        $user = auth()->user();
        //$user->update($dulieu);
        if (!\Hash::check($dulieu['password'], $user->password)) {
            return redirect()->route('taikhoan_suathongtincanhan')->withErrors([
                'password' => "Mật khẩu hiện tại không đúng"
            ]);
        } 
        //$user->update($xuly);
        $user->password = \Hash::make($dulieu['password']);
        $user->save();
        \Session::flash('success', 'Cập nhập thành công');

        return redirect()->back();
    }
    
    public function xemttcn(){
        $user = auth()->user();
        return view('taikhoan.showttin', compact('user'));
    }
    
    public function doiEmail(){
        $user = auth()->user();
        return view('taikhoan.doiemail',compact('user'));
    }
    public function xulyemail(){
        $dulieu = request()->all();
        $quyluat = [
            'password' => 'required',
            'email_news' => 'required',
            'email_confirmation' => 'required|same:email_news|unique:users',
        ];

        $thongbao = [
            'password.required' => 'Mật khẩu bắt buộc phải nhập ',
            'email_news.required' => 'Email bắt buộc phải nhập',
            'email_confirmation.required' => 'Xác nhận email bắt buộc phải nhập',
            'email_confirmation.same' => 'Xác nhận email phải trùng ở trên',
            'email_confirmation.unique' => 'Hiện tại email này đã có',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);
        if ($xuly->fails()) {
            return redirect()->route('doiEmail')->withErrors($xuly);
        }
        $dulieu['id_user'] = auth()->user()->id;
//        $user = new User;
//        $users->password = \Hash::make($dulieu['password_confirmation']);
//        $users->save();
       // return redirect()->route('dangnhap');
        
        $user = auth()->user();
       //dd(\Hash::make('123123'));
        if (!\Hash::check($dulieu['password'], $user->password)) {
            return redirect()->route('doiEmail')->withErrors([
                'password' => "Mật khẩu hiện tại không đúng"
            ]);
        }  
        
        $user->email = ($dulieu['email_confirmation']);
//        $user->password = \Hash::make($dulieu['password']);
        $user->save();
        return redirect()->route('dangnhap');
    }
    
}
