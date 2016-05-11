<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Curriculumvitalanguage;
use App\Language;
use App\Curriculumvita;


//class AdminQuanlyCurriculumvitaesLanguages extends Controller {
  class AdminQuanlyLanguagesCurriculumvitaes extends Controller{
    //danh sach
    public function index() {
        $curriculumvitalanguage = Curriculumvitalanguage::all();
        return view('admin.hosongonngu.index')->with([
                    'hosongonngu' => $curriculumvitalanguage,
        ]);
    }

    //create
    public function create() {
        $curriculumvitaes = Curriculumvita::all();
        $languages = Language::all();
        return view('admin.hosongonngu.create')->with([
                    'curriculumvitaes' => $curriculumvitaes,
                    'languages' => $languages
        ]);
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'id_curriculum_vitae' => 'required',
            'id_language' => 'required',
        ];

        $thongbao = [
            'id_curriculum_vitae.required' => 'Không đúng định dạng',
            'id_language.required' => 'Không đúng định dạng',
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_curriculumvitaes_languages.them')->withErrors($xuly);
        }
        $dulieu['user_id'] = auth()->user()->id;
       // dd($dulieu);
        Curriculumvitalanguage::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $curriculumvitalanguage = Curriculumvitalanguage::find($id); 
        $languages = Language::all();
        return view('admin.hosongonngu.edit')->with([
                    'curriculumvitalanguage' => $curriculumvitalanguage,
                    'languages' => $languages
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

        $curriculumvitalanguage = Curriculumvitalanguage::find($id);
        $curriculumvitalanguage->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $curriculumvitalanguage = Curriculumvitalanguage::find($id);
        $curriculumvitalanguage->delete();
        
        return redirect()->back();
    }
  }