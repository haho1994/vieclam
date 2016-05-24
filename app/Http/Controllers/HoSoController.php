<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Curriculumvita;
use App\User;
use App\Company;
use App\Category;
use App\Location;
use App\Language;

class HoSoController extends Controller {
     public function index() {
        $user = auth()->user();
        $cv = Curriculumvita::where('id_user', $user->id)->first();
        return view('thongtin.hoso',  compact('cv','user'));
        
    }
    public function Showhoso($id){
        $curriculumvitae = Curriculumvita::find($id);
        return view('thongtin.xemhoso', compact('curriculumvitae'));
    }
    public function suahoso($id) {
        $curriculumvitaes = Curriculumvita::find($id);
        $user = User::all();
        $company = Company::all();
        $category = Category:: all();
        $location = Location::all();
        $language = Language::all();
        return view('thongtin.suahoso')->with([
                    'curriculumvitaes' => $curriculumvitaes,
                    'companies' => $company,
                    'users' => $user,
                    'categories' => $category,
                    'locations' => $location,
                    'languages' => $language
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'year_experience' => 'required',
            'highes_edu' => 'required',
            'recent_company_id' => 'required',
            'recent_category_id' => 'required',
            'expected_position_id' => 'required',
            'expected_location_id' => 'required',
            'expected_salary' => 'required',
        ];

        $thongbao = [
            'year_experience.required' => 'Kinh nghiệm bắt buộc phải nhập',
            'highes_edu.required' => 'Trình độ bắt buộc phải nhập',
            'recent_company_id.required' => 'Thuộc công ty gần đây không đúng định dạng',
            'recent_category_id.required' => 'Thuộc ngành nghề gần đây không đúng định dạng',
            'expected_position_id.required' => 'Vị trí công việc bắt buộc phải nhập',
            'expected_location_id.required' => 'Thuộc công ty không đúng định dạng',
            'expected_salary.required' => 'Mức lương bắt buộc phải nhập',
        ];


        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('hoso')->withErrors($xuly);
        }

        $curriculumvita = Curriculumvita::find($id);
        $curriculumvita->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

}
