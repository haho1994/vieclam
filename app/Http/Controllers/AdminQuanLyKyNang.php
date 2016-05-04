<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\skills;
use App\users;
class AdminQuanlyKyNang extends Controller {
    
    //danh sach
    public function index() {
        $skills = skills::all();
        return view('admin.kynang.index')->with([
                    'kynang' => $skills
        ]);
    }

    //create
    public function create() {
        return view('admin.kynang.create');
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            
        ];

        $thongbao = [
            'name.required' => 'Tên không được để trống',
      ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly-kynang.them')->withErrors($xuly);
        }
        
        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['id_user'] = auth()->user()->id;
        //dd($dulieu);
        skills::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $skills = skills::find($id);
        $user = skills::whereNull('id_user')->get();

        return view('admin.kynang.edit')->with([
                    'kynang' => $skills,
                    '$user' => $user
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            'id_user'=> 'integer|min:1',
        ];

        $thongbao = [
            'name.required' => 'Tên không được để trống',
            'id_user.integer' => 'Thuộc không đúng định dạng',
            'id_user.min' => 'Thuộc không đúng định dạng',
      ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly-kynang.them')->withErrors($xuly);
        }

        $skills= Company::find($id);
        $skills->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $skills = skills::find($id);
        $skills->delete();
        
        return redirect()->back();
    }

}
