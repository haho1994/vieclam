<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Language;

class AdminQuanLyNgonNgu extends Controller {

    //danh sach
    public function index() {
        $languages = Language::all();
        return view('admin.ngonngu.index')->with([
                    'ngonngu' => $languages
        ]);
    }

    //create
    public function create() {
        return view('admin.ngonngu.create')->with([
                   
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
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.ngonngu.them')->withErrors($xuly);
        }

        Language::create($dulieu);

        \Session::flash('success', 'Thêm Thành Công!!');

        return redirect()-> route('admin.quanly-ngonngu');
    }

    //sua
    public function edit($id) {
        $languages = Language::find($id);
        return view('admin.ngonngu.edit')->with([
                    'languages' => $languages
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();

        //dd($dulieu);

        $quyluat = [
            'name' => 'required'
        ];

        $thongbao = [
            'name.required' => 'Ten khong dc de trong'
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quangly-ngonngu.them')->withErrors($xuly);
        }

        $languages = Language::find($id);
        $languages->update($dulieu);

        \Session::flash('success', 'Sửa Thành Công');

        return redirect()-> route('admin.quanly-ngonngu');
    }

    public function destroy($id){
        $languages = Language::find($id);
        $languages->delete();
        return redirect()->back();
    }
     public function show($id){
        $languages = Languages::find($id);
        return view('admin.ngonngu.show')->with([
                    'languages' => $languages,
            ]);
    }

}
