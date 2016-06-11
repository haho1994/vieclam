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
            
           
        ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_curriculumvitaes')->withErrors($xuly);
        }
        
        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['user_id'] = auth()->user()->id;
        //dd($dulieu);
        Curriculumvita::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()-> route('admin.quanly_curriculumvitaes');
    }

    //sua
    public function edit($id) {
        
        $curriculumvita = Curriculumvita::find($id);    
        $users = User::all();
        $companies = Company::all();
        $categories = Category::all();
        $locations = Location::all();
        $languages = \App\Language::all();
        return view('admin.hoso.edit')->with([
                    'curriculumvita' => $curriculumvita,
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
            return redirect()->route('admin.quanly_curriculumvitaes')->withErrors($xuly);
        }

        $curriculumvita = Curriculumvita::find($id);
        $curriculumvita->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()-> route('admin.quanly_curriculumvitaes');
    }
   
    public function destroy($id){
        $curriculumvita = Curriculumvita::find($id);
        $curriculumvita->delete();
        
        return redirect()->back();
    }
    public function show($id){
        $curriculumvita = Curriculumvita::find($id);
        return view('admin.hoso.show')->with([
                    'curriculumvita' => $curriculumvita,
            ]);
    }

}
