<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\skills;

class AdminQuanLyDanhMuc extends Controller {

    //danh sach
    public function index() {
        $skills = skills::all();
        return view('admin.kynang.index')->with([
                    'kynang' => $skills
        ]);
    }

    //create
    public function create() {
        return view('admin.kynang.create')->with([
               //     'parents' => $parents
        ]);
    }

    public function store() {
        $dulieu = request()->all();

        //dd($dulieu);

        $quyluat = [
            'name' => 'required',
        ];

        $thongbao = [
            'name.required' => 'Ten khong dc de trong',
            'id_user.integer' => 'Thuoc danh muc khong dung dinh dang',
            'id_ parent.min' => 'Thuoc danh muc khong dung dinh dang',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_danhmuc.them')->withErrors($xuly);
        }

        Category::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
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

        return redirect()->back();
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        
        return redirect()->back();
    }

}
