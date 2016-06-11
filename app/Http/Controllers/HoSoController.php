<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Curriculumvita;
use App\User;
use App\Company;
use App\Category;
use App\Location;
use App\Language;
use App\Curriculumvitalanguage;

class HoSoController extends Controller {

    public function index() {
        $user = auth()->user();
        $cv = Curriculumvita::where('id_user', $user->id)->first();
        $lg = Curriculumvitalanguage::all();
        $languages = Language::all();
        return view('thongtin.hoso', compact('cv', 'user'));
    }

    public function create() {
        $user = auth()->user();
        $cvId = request()->get('id');
        $Cv = Curriculumvita::find($cvId);
        $companies = Company::all();
        $categories = Category::all();
        $locations = Location::all();
        return view('thongtin.taohoso')->with([
                    'user' => $user,
                    'companies' => $companies,
                    'categories' => $categories,
                    'locations' => $locations
        ]);
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [

            'year_experience' => 'required',
            'highes_edu' => 'required',
            'recent_company_id' => 'required',
            'recent_category_id' => 'required',
            'expected_position_id' => 'required',
            'expected_location_id' => 'required',
            'expected_salary' => 'required',
            'current_job_level' => 'required',
            'expected_job_level' => 'required',
            'expected_job_category' => 'required'
        ];

        $thongbao = [

            'year_experience.required' => 'Kinh nghiệm bắt buộc phải nhập',
            'highes_edu.required' => 'Trình độ bắt buộc phải nhập',
            'recent_company_id.required' => 'Thuộc công ty gần đây không đúng định dạng',
            'recent_category_id.required' => 'Thuộc ngành nghề gần đây không đúng định dạng',
            'expected_position_id.required' => 'Vị trí công việc bắt buộc phải nhập',
            'expected_location_id.required' => 'Thuộc công ty không đúng định dạng',
            'expected_salary.required' => 'Mức lương bắt buộc phải nhập',
            'current_job_level' => 'Mức độ công việc hiện tại phải nhập',
            'expected_job_level' => 'Mức độ công việc dự kiến phải nhập',
            'expected_job_category' => 'Loại công việc dự kiến phải nhập'
        ];


        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('thongtin.hoso')->withErrors($xuly);
        }

        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['id_user'] = auth()->user()->id;
        //dd($dulieu);
        Curriculumvita::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    public function edit($id) {

        $cv = Curriculumvita::find($id);
        $users = User::all();
        $companies = Company::all();
        $categories = Category::all();
        $locations = Location::all();
        $languages = \App\Language::all();
        return view('thongtin.suahoso')->with([
                    'cv' => $cv,
                    'users' => $users,
                    'companies' => $companies,
                    'categories' => $categories,
                    'locations' => $locations,
                    'languages' => $languages
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
            'current_job_level' => 'required',
            'expected_job_level' => 'required',
            'expected_job_category' => 'required'
        ];

        $thongbao = [
            'year_experience.required' => 'Kinh nghiệm bắt buộc phải nhập',
            'highes_edu.required' => 'Trình độ bắt buộc phải nhập',
            'recent_company_id.required' => 'Thuộc công ty gần đây không đúng định dạng',
            'recent_category_id.required' => 'Thuộc ngành nghề gần đây không đúng định dạng',
            'expected_position_id.required' => 'Vị trí công việc bắt buộc phải nhập',
            'expected_location_id.required' => 'Thuộc công ty không đúng định dạng',
            'expected_salary.required' => 'Mức lương bắt buộc phải nhập',
            'current_job_level' => 'Mức độ công việc hiện tại phải nhập',
            'expected_job_level' => 'Mức độ công việc dự kiến phải nhập',
            'expected_job_category' => 'Loại công việc dự kiến phải nhập'
        ];


        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('thongtin.hoso')->withErrors($xuly);
        }

        $curriculumvita = Curriculumvita::find($id);
        $curriculumvita->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function taiCV($cvId) {
        $user = auth()->user();
        $file = request()->file('cv');
        $director = public_path('upload/cv/' . $cvId . $user->id);
        dd($cvId);
        //move_uploaded_file($file->getPathName(), $director.'/abc.doc');

        \File::makeDirectory($director, $mode = 0777, true, true);
        $fileName = gen_uuid();
        $file->move($director, $fileName . '.' . $file->getClientOriginalExtension());

        $Cv = $user->UserCv()->attach($cvId, [
            'filename' => $fileName . '.' . $file->getClientOriginalExtension()
        ]);
        return redirect()->back();
    }

}
