<?php 

namespace App\Http\Controllers;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use App\Http\Request\Login;
use App\User;
use App\Category;

class TaiKhoanController extends Controller {

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
//        dd(\Hash::make('123123'));
        if (!\Hash::check($dulieu['password'], $user->password)) {
            return redirect()->route('doimatkhau')->withErrors([
                'password' => "mat khau hien tai khong dung"
            ]);
        }     
        
        $user->password = \Hash::make($dulieu['password_confirmation']);
        $user->save();

        \Session::flash('sauccess', 'Sua thanh cong');

        return redirect()->back();
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

    public function suathongtincanhan($id) {
        $users = User::find($id);
        return view('taikhoan.suathongtincanhan')->with([
                    'users' => $users
        ]);
    }

    public function xulysuathongtincanhan($id) {
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
            return redirect()->route('cnttcn')->withErrors($xuly);
        }

        $user = User::find($id);
        $user->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }
    
}
