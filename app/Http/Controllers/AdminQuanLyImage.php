<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Image;
use App\User;
use App\Company;
class AdminQuanlyImage extends Controller {
    
    //danh sach
    public function index() {
        $images = Image::all();
        return view('admin.image.index')->with([
                    'images' => $images
        ]);
    }

    //create
    public function create() {
        $images = Image::all();
        $users = User::all();
        $companies = Company::all();
        return view('admin.image.create')->with([
           'images' => $images,
           'users' =>  $users,
           'companies' => $companies
        ]);
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'target_id' => 'required',
            'target_content' => 'required',
            'name' => 'required'
        ];

        $thongbao = [
            'target_id.required' => 'Mục tiêu không đúng định dạng',
            'target_content.required' => 'Nội dung mục tiêu không được để trống',
            'name.required' => 'Tên không được để trống',
        ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_images.them')->withErrors($xuly);
        }
        
        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['user_id'] = auth()->user()->id;
        //dd($dulieu);
        Image::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $images = Image::find($id);
        $hinhanh = Image::all();
        $users = User::all();
        $companies = Company::all();
        return view('admin.image.edit')->with([
                    'images' => $images,
                    'hinhanh' => $hinhanh,
                    'users' =>  $users,
                    'companies' => $companies
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'target_id' => 'required',
            'target_content' => 'required',
            'name' => 'required'
        ];

        $thongbao = [
            'target_id.required' => 'Mục tiêu không đúng định dạng',
            'target_content.required' => 'Nội dung mục tiêu không được để trống',
            'name.required' => 'Tên không được để trống',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_images.them')->withErrors($xuly);
        }
        
        $images = Image::find($id);
        $images->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $images = Image::find($id);
        $images->delete();
        
        return redirect()->back();
    }
}
