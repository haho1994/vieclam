<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Job_favourite;
use App\User;
use App\Job;
class AdminQuanlyCongViecYeuThich extends Controller {
    
    //danh sach
    public function index() {
        $jobfavourites = Job_favourite::all();
        return view('admin.congviecyeuthich.index')->with([
                    'jobfavourites' => $jobfavourites
        ]);
    }

    //create
    public function create() {
        $users = User::all();
        $jobs = Job::all();
        return view('admin.congviecyeuthich.create')->with([
           'users' => $users,
            'jobs' => $jobs
        ]);
    }

    public function store() {
        $dulieu = request()->all();
        $quyluat = [
            'id_job'=> 'integer|min:1',
            'id_user'=> 'integer|min:1',
           
        ];

        $thongbao = [
            'id_job.integer' => 'Thuộc không đúng định dạng',
            'id_job.min' => 'Thuộc không đúng định dạng',
            'id_user.integer' => 'Thuộc không đúng định dạng',
            'id_user.min' => 'Thuộc không đúng định dạng',
           
        ];
        

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_job.them')->withErrors($xuly);
        }
        
        //auth()->user() lay thongg tin cua user dang dang nhap hien tai
        $dulieu['id_user'] = auth()->user()->id;
       // dd($dulieu);
       Job_favourite::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $job_favourite = Job_favourite::find($id);
        $jobs = Job::all();
        $users = User::all();
        return view('admin.congviecyeuthich.edit')->with([
                    'job_favourite' => $job_favourite,
                    'jobs' => $jobs,
                    'users' => $users
        ]);
    }

    public function update($id) {
        $dulieu = request()->all();
        $quyluat = [
            'id_user'=> 'integer|min:1',
            'id_job'=> 'integer|min:1'
            
        ];

        $thongbao = [
            'id_user.integer' => 'Thuộc không đúng định dạng',
            'id_user.min' => 'Thuộc không đúng định dạng',
            'id_job.integer' => 'Thuộc không đúng định dạng',
            'id_job.min' => 'Thuộc không đúng định dạng',
            
        ];

        $xuly = \Validator::make($dulieu, $quyluat, $thongbao);

        if ($xuly->fails()) {
            return redirect()->route('admin.quanly_job.them')->withErrors($xuly);
        }

        $job_favourite = Job_favourite::find($id);
        $job_favourite->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $job_favourite = Job_favourite::find($id);
        $job_favourite->delete();
        
        return redirect()->back();
    }
    public function show($id){

        $job_favourite = Job_favourite::find($id);
        return view('admin.congviecyeuthich.show')->with([
                    'job_favourite' => $job_favourite,
            ]);
    }

}
