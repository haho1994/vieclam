<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Job;
use App\Company;
use App\Location;
use App\Skill;
use App\Category;
use App\Language;

class AdminQuanlyJobs extends Controller {
    
    //danh sach
    public function index() {
        $jobs = Job::all();
        return view('admin.congviec.index')->with([
                    'jobs' => $jobs
        ]);
    }

    //create
    public function create() {
        $jobs = Job::all();
        $companies = Company::all();
        $locations = Location::all();
        $skills = Skill::all();
        $categories = Category::all();
        $languages = Language::all();
        return view('admin.congviec.create')->with([
            'companies' => $companies,
            'locations' => $locations,
            'skills' => $skills,
            'categories' => $categories,
            'languages' => $languages,
            'jobs' => $jobs
            
        ]);
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'name' => 'required',
            'id_company' => 'required',
            'id_location' => 'required',
            'id_skill'=> 'required',
            'salary' => 'required',
            'id_category' => 'required',
            'id_language' => 'required',
            'experience' => 'required'
        ];

        $thongbao = [
            
            'name.required.' => 'Tên không được để trống', 
            'id_company.required' => 'Tên công ty không được để trống',
            'id_location.required' => 'Địa điểm không được để trống',
            'id_skill.required' => 'Kỹ năng không được để trống',
            'salary.required' => 'Mức lương không được để trống',
            'id_category.required' => 'Nghành nghề không được để trống',
            'id_language.required' => 'Yêu cầu ngôn ngữ không được để trống',
            'experience.required' => 'Kinh nghiệm không được để trống'
        ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_jobs.them')->withErrors($xuly);
        }
        
        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['user_id'] = auth()->user()->id;
        //dd($dulieu);
        Job::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()-> route('admin.quanly_jobs');
    }

    //sua
    public function edit($id) {
        $job = Job::find($id);
        $companies = Company::all();
        $locations = Location::all();
        $skills = Skill::all();
        $categories = Category::all();
        $languages = Language::all();
        return view('admin.congviec.edit')->with([
                    'job' => $job,
                    'companies' => $companies,
                    'locations' => $locations,
                    'skills' => $skills,
                    'categories' => $categories,
                    'languages' => $languages
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'id_company' => 'required',
            'id_location' => 'required',
            'id_skill'=> 'required',
            'salary' => 'required',
            'id_category' => 'required',
            'id_language' => 'required',
            'experience' => 'required'
        ];

        $thongbao = [
            'id_company.required' => 'Tên công ty không được để trống',
            'id_location.required' => 'Địa điểm không được để trống',
            'id_skill.required' => 'Kỹ năng không được để trống',
            'salary.required' => 'Mức lương không được để trống',
            'id_category.required' => 'Nghành nghề không được để trống',
            'id_language.required' => 'Yêu cầu ngôn ngữ không được để trống',
            'experience.required' => 'Kinh nghiệm không được để trống'
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_jobs.them')->withErrors($xuly);
        }
        
        $job = Job::find($id);
        $job->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()-> route('admin.quanly_jobs');
    }

    public function destroy($id){
        $job = Job::find($id);
        $job->delete();
        
        return redirect()->back();
    }
    
    public function show($id){
        $job = Job::find($id);
        return view('admin.congviec.show')->with([
                    'job' => $job,
            ]);
    }

}
