<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Category;

class AdminQuanLyDanhMuc extends Controller {
    
    
    public function trangchu(){
        return view('admin.trangAdmin.admin');
    }

    //login
    public function login() {
        return view('admin.dangnhap_admin.login');
    }

    public function xuLyLogin() {
        $email = request()->get('email');
        $password = request()->get('password');
        if (\Auth::attempt(['email' => $email, 'password' => $password, 'is_admin' => 1])) {
            // Nếu đăng nhập đúng
            return redirect()->route('admin_trangchu');
           // echo 'dang nhap hanh cong';
        }
        //Nếu đăng nhập sai
        return redirect()->route('admin_login');
    }
    

    //danh sach
    public function index() {
        $categories = Category::all();
        return view('admin.danhmuc.index')->with([
                    'danhmuc' => $categories
        ]);
    }

    //create
    public function create() {
        $parents = Category::whereNull('id_parent')->get();
        return view('admin.danhmuc.create')->with([
                    'parents' => $parents
        ]);
    }

    public function store() {
        $dulieu = request()->all();

        //dd($dulieu);

        $quyluat = [
            'name' => 'required',
            'id_parent' => 'integer|min:1',
        ];

        $thongbao = [
            'name.required' => 'Ten khong dc de trong',
            'id_parent.integer' => 'Thuoc danh muc khong dung dinh dang',
            'id_parent.min' => 'Thuoc danh muc khong dung dinh dang',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_danhmuc.them')->withErrors($xuly);
        }
        $dulieu['user_id'] = auth()->user()->id;
       // dd($dulieu);
        Category::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()-> route('admin.quanly_danhmuc');
    }

    //sua
    public function edit($id) {
        $category = Category::find($id);
        $parents = Category::whereNull('id_parent')->get();

        return view('admin.danhmuc.edit')->with([
                    'category' => $category,
                    'parents' => $parents
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();

        //dd($dulieu);

        $quyluat = [
            'name' => 'required',
            'id_parent' => 'integer|min:1',
        ];

        $thongbao = [
            'name.required' => 'Ten khong dc de trong',
            'id_parent.integer' => 'Thuoc danh muc khong dung dinh dang',
            'id_parent.min' => 'Thuoc danh muc khong dung dinh dang',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_danhmuc.them')->withErrors($xuly);
        }

        $category = Category::find($id);
        $category->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()-> route('admin.quanly_danhmuc');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        
        return redirect()->back();
    }
    public function show($id){
        $category = Category::find($id);
        return view('admin.danhmuc.show')->with([
                    'category' => $category,
            ]);
    }
    public function thoat(){
       return view('admin.danhmuc.index');
    }
}
