<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Location;
use App\Category;
class AdminQuanLyUser extends Controller {
    
    //danh sach
    public function index() {
        $user = User::all();
        return view('admin.nguoisudung.index')->with([
                    'nguoisudung' => $user
        ]);
    }

    //create
    public function create() {
        $locations = Location::all();
        $categories  = Category::all();
        return view('admin.nguoisudung.create')->with([
           'locations' => $locations,
            'categories' => $categories
        ]);
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'full_name' => 'required',
            'brithday' => 'required',
            'email' => 'required|email|unique:users',
            'phone'=> 'required|between:10,12',
            'address'=> 'required',
            'id_location'=> 'integer|min:1',
            'id_category'=> 'integer|min:1',
            'salary'=>'required'
            
        ];

        $thongbao = [
            'full_name.required' => 'Tên không được để trống',
            'brithday.required' => 'Ngày sinh không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.unique' => 'Hiện tại email này đã có',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.between' => 'Số điện thoại không đúng định dạng',
            'address.required' => 'Địa chỉ không được để trống',
            'id_location.integer' => 'Thuộc không đúng định dạng',
            'id_location.min' => 'Thuộc không đúng định dạng',
            'id_category.integer' => 'Thuộc không đúng định dạng',
            'id_category.min' => 'Thuộc không đúng định dạng',
            'salary'=>'Mức lương không được để trống'
        ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_user.them')->withErrors($xuly);
        }
        
        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['id_user'] = auth()->user()->id;
        //dd($dulieu);
        User::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $user = User::find($id);
        $location= User::whereNull('id_location')->get();
        $category= User::whereNull('id_category')->get();
        return view('admin.nguoisudung.edit')->with([
                    'users' => $user,
                    '$locations' => $locations,
                    '$category' => $category,
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'full_name' => 'required',
            'brithday' => 'required',
            'email' => 'required|email|unique:companies',
            'phone'=> 'required|between:10,12',
            'address'=> 'required',
            'id_location'=> 'integer|min:1',
            'id_category'=> 'integer|min:1',
        ];

        $thongbao = [
           'full_name.required' => 'Tên không được để trống',
            'brithday.required' => 'Ngày sinh không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.unique' => 'Hiện tại email này đã có',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.between' => 'Số điện thoại không đúng định dạng',
            'address.required' => 'Địa chỉ không được để trống',
            'id_location.integer' => 'Thuộc không đúng định dạng',
            'id_location.min' => 'Thuộc không đúng định dạng',
            'id_category.integer' => 'Thuộc không đúng định dạng',
            'id_category.min' => 'Thuộc không đúng định dạng',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_user.them')->withErrors($xuly);
        }

        $user = User::find($id);
        $user->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        
        return redirect()->back();
    }
   
    

}
