<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\Login;

class TrangchuController extends Controller {

//    public function index() {
//        $category = "CNTT";
//        
//        //lay tat ca
//        $danhmuc = \App\Category::all();
//        
//        //lay theo id
//        $danhmucId = \App\Category::find('1120000001');
//        
//        //llay theo where
//        $danhmucWhere1 = \App\Category::where('description', 'da la mo ta')->first()->toArray(); //record dau tien
//        
//        $danhmucWhere2 = \App\Category::where('description', 'da la mo ta')->get()->toArray();  // lay nhieu
//        
//        
//        dd($danhmucWhere2);
//        
//        return view('home.trangchu')->with([
//            'vidu' => $category,
//            'danhmuc' => $danhmuc,
//            'danhmucId' => $danhmucId
//        ]);
//    }
//    
//    public function dangky()
//    {
//        return view('home.dangky');
//    }

    public function dangKyViecLam() {
        return view('dangky.dangkyvieclam');
    }

    public function xuLyDangKyViecLam() {
        $dulieu = request()->all();

        $quyluat = [
            'full_name' => 'required|min:3',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'brithday' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'address' => 'required',
        ];

        $thongbao = [
            'email.email' => 'Email không đúng định dạng',
            'full_name.required' => 'Họ tên bắt buộc phải nhập',
            'full_name.min' => 'Họ tên bắt buộc phải nhập trên 3 kí tự',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.unique' => 'Hiện tại email này đã có',
            'password.required' => 'Mật khẩu bắt buộc phải nhập',
            'password_confirmation.required' => 'Nhập lại mật khẩu bắt buộc phải nhập',
            'password_confirmation.same' => 'Nhập lại mật khẩu phải trùng ở trên',
            'phone.required' => 'Số điện thoại bắt buộc phải nhập',
            'brithday.required' => 'Ngày sinh bắt buộc phải nhập',
            'address.required' => 'Địa chỉ bắt buộc phải nhập',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);
        if ($xuly->fails()) {
            return redirect()->route('dangky')->withErrors($xuly);
        }

        $user = new \App\User;
        $user->full_name = $dulieu['full_name'];
        $user->password = \Hash::make($dulieu['password']);
        $user->brithday = $dulieu['brithday'];
        $user->email = $dulieu['email'];
        $user->phone = $dulieu['phone'];
        $user->address = $dulieu['address'];

        $user->save();

        //$dulieu['password'] =  \Hash::make($dulieu['password']);
        //dd($dulieu);
        //\App\User::create($dulieu);
        //\App\User::updated($dulieu);
        //Xoa
        //$user = \App\User::find(1);
        //$user->delete();

        return redirect()->route('dangky');
    }

//    public function danhSachTaiKhoan()
//    {
//        $users = \App\User::all();
//        
//        return view('dangky.danhsach_taikhoan')->with([
//            'users' => $users
//        ]);
//    }
//    
//    public function xuLyXoa($userId)
//    {
//        $user = \App\User::find($userId);
//        $user->delete();
//        
//        return redirect()->route('danhsach.taikhoan');
//    }

    public function dangNhapTaiKhoan() {
        return view('dangnhap.dangnhap_taikhoan');
    }

    public function xuLyDangNhap() {
        $email = request()->get('email');
        $password = request()->get('password');
        //'is_admin' =1;
        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            // Nếu đăng nhập đúng
            return redirect()->route('admin.quanly_companies');
        }
        //Nếu đăng nhập sai
        return redirect()->route('dangky');
    }
    
    public function doiMatKhau(){
        return view('taikhoan.doipass');
    }
    public function xuLyDoiMatKhau(){
        $email = request()->get('email');
        $password = request()->get('password');
        //'is_admin' =1;
        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            // Nếu đăng nhập đúng
            return redirect()->route('dangnhap');
        }
        //Nếu đăng nhập sai
        return redirect()->route('dangky');
        
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
            return redirect()->route('dangky')->withErrors($xuly);
        }

        $user = new \App\User;
        $user->password = \Hash::make($dulieu['password']);
        $user->save();
        return redirect()->route('dangky');
    }
    

}
