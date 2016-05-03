<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Curriculumvita;
class AdminQuanlyCurriculumvitaes extends Controller {
    
    //danh sach
    public function index() {
        $curriculumvitaes = Curriculumvita::all();
        return view('admin.hoso.index')->with([
                    'hoso' => $curriculumvitaes
        ]);
    }

    //create
    public function create() {
        return view('admin.hoso.create');
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            'address' => 'required',
            'id_location'=> 'integer|min:1',
            'email' => 'required|email|unique:companies',
            'phone'=> 'required|between:10,12',
        ];

        $thongbao = [
            'name.required' => 'Tên không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'id_location.integer' => 'Thuộc công ty không đúng định dạng',
            'id_location.min' => 'Thuộc công ty không đúng định dạng',
            'email.email' => 'Email không đúng định dạng',
            'email.required' => 'Email bắt buộc phải nhập',
            'email.unique' => 'Hiện tại email này đã có',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.between' => 'Số điện thoại không đúng định dạng',
        ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_curriculumvitaes.them')->withErrors($xuly);
        }
        
        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['user_id'] = auth()->user()->id;
        //dd($dulieu);
        Curriculumvita::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $curriculumvitaes = Curriculumvita::find($id);
        return view('admin.hoso.edit')->with([
                    'curriculumvita' => $curriculumvitaes
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone'=> 'required|between:10,12',
        ];

        $thongbao = [
            'name.required' => 'Tên không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.required' => 'Email bắt buộc phải nhập',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.between' => 'Số điện thoại không đúng định dạng',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_curriculumvita')->withErrors($xuly);
        }

        $curriculumvitaes = Curriculumvita::find($id);
        $curriculumvitaes->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }
   
    public function destroy($id){
        $curriculumvitaes = Curriculumvita::find($id);
        $curriculumvitaes->delete();
        
        return redirect()->back();
    }

}
