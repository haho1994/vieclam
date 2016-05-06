<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Skill;
use App\User;
class AdminQuanlyKyNang extends Controller {
    
    //danh sach
    public function index() {
        $skills = Skill::all();
        return view('admin.kynang.index')->with([
                    'kynang' => $skills
        ]);
    }

    //create
    public function create() {
        $users = User::all();
        return view('admin.kynang.create')->with([
           'users' => $users 
        ]);
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
        //$dulieu['id_user'] = auth()->user()->id;
        //dd($dulieu);
        Skill::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }
    
    //sua
    public function edit($id) {
        $skills = Skill::find($id);
        $user = Skill::whereNull('id_user')->get();

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

        $skills= Skill::find($id);
        $skills->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $skills = Skill::find($id);
        $skills->delete();
        
        return redirect()->back();
    }
     public function show($id){
        $skills = Skill::find($id);
        return view('admin.quanly-kynang.show')->with([
                    'skills' => $skills,
            ]);
    }

}
