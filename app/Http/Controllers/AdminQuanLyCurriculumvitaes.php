<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Curriculumvita;
use App\User;
use App\Company;
use App\Category;
use App\Location;


class AdminQuanlyCurriculumvitaes extends Controller {
    
    //danh sach
    public function index() {
        $curriculumvita = Curriculumvita::all();
        return view('admin.hoso.index')->with([
                    'hoso' => $curriculumvita,
                    'company' => $curriculumvita
        ]);
    }

    //create
    public function create() {
        $users = User::all();
        $companies = Company::all();
        $categories = Category::all();
        $locations = Location::all();
        return view('admin.hoso.create')->with([
                    'users' => $users,
                    'companies' => $companies,
                    'categories' => $categories,
                    'locations' => $locations
                
    ]);
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'id_user' => 'required',
            'year_experience' => 'required',
            'highes_edu' => 'required',
            'recent_company_id' => 'required',
            'recent_category_id' => 'required',
            'expected_position_id' => 'required',
            'expected_location_id' => 'required',
            'expected_salary' => 'required',
            'current_job_level' => 'required',
            'expected_job_level' => 'required',
            'expected_job_category' => 'required',
            'is_negotiable' => 'required'
        ];

        $thongbao = [
            'id_user.required' => 'Thuộc công ty không đúng định dạng',
            'year_experience.required' => 'Kinh nghiệm bắt buộc phải nhập',
            'highes_edu.required' => 'Trình độ bắt buộc phải nhập',
            'recent_company_id.required' => 'Thuộc công ty gần đây không đúng định dạng',
            'recent_category_id.required' => 'Thuộc ngành nghề gần đây không đúng định dạng',
            'expected_position_id.required' => 'Vị trí công việc bắt buộc phải nhập',
            'expected_location_id.required' => 'Thuộc công ty không đúng định dạng',
            'expected_salary.required' => 'Mức lương bắt buộc phải nhập',
            'current_job_level.required' => 'Mức độ công việc hiện tại bắt buộc phải nhập',
            'expected_job_level.required' => 'Mức độ công việc dự kiến bắt buộc phải nhập',
            'expected_job_category.required' => 'Thuộc loại công việc dự kiến không đúng định dạng',
            'is_negotiable.required' => 'Thuộc công ty không đúng định dạng',
           
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
        $curriculumvita = Curriculumvita::find($id);
        return view('admin.hoso.edit')->with([
                    'curriculumvita' => $curriculumvita
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'id_user' => 'required',
            'year_experience' => 'required',
            'highes_edu' => 'required',
            'recent_company_id' => 'required',
            'recent_category_id' => 'required',
            'expected_position_id' => 'required',
            'expected_location_id' => 'required',
            'expected_salary' => 'required',
            'current_job_level' => 'required',
            'expected_job_level' => 'required',
            'expected_job_category' => 'required',
            'is_negotiable' => 'required'
        ];

        $thongbao = [
            'id_user.required' => 'Thuộc công ty không đúng định dạng',
            'year_experience.required' => 'Kinh nghiệm bắt buộc phải nhập',
            'highes_edu.required' => 'Trình độ bắt buộc phải nhập',
            'recent_company_id.required' => 'Thuộc công ty gần đây không đúng định dạng',
            'recent_category_id.required' => 'Thuộc ngành nghề gần đây không đúng định dạng',
            'expected_position_id.required' => 'Vị trí công việc bắt buộc phải nhập',
            'expected_location_id.required' => 'Thuộc công ty không đúng định dạng',
            'expected_salary.required' => 'Mức lương bắt buộc phải nhập',
            'current_job_level.required' => 'Mức độ công việc hiện tại bắt buộc phải nhập',
            'expected_job_level.required' => 'Mức độ công việc dự kiến bắt buộc phải nhập',
            'expected_job_category.required' => 'Thuộc loại công việc dự kiến không đúng định dạng',
            'is_negotiable.required' => 'Thuộc công ty không đúng định dạng',
           
        ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_curriculumvitaes')->withErrors($xuly);
        }

        $curriculumvita = Curriculumvita::find($id);
        $curriculumvita->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }
   
    public function destroy($id){
        $curriculumvita = Curriculumvita::find($id);
        $curriculumvita->delete();
        
        return redirect()->back();
    }

}
