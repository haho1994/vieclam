<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Job_favourites;
use App\User;
use App\Job;
class AdminQuanlyCongViecYeuThich extends Controller {
    
    //danh sach
    public function index() {
        $job_favourites = Job_favourites::all();
        return view('admin.congviecyeuthich.index')->with([
                    'congviecyeuthich' => $job_favourites
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
       Job_favourites::create($dulieu);

        \Session::flash('success', 'Tao thanh cong');

        return redirect()->back();
    }

    //sua
    public function edit($id) {
        $job_favourites = Job_favourites::find($id);
//        $user = job_favourites::whereNull('id_user')->get();
//        $user = job_favourites::whereNull('id_user')->get();

        return view('admin.congviecyeuthich.edit')->with([
                    'job_favourites' => $job_favourites,
                    'jobs' => $jobs
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

        $job_favourites = Job_favourites::find($id);
        $job_favourites->update($dulieu);

        \Session::flash('success', 'Sua thanh cong');

        return redirect()->back();
    }

    public function destroy($id){
        $job_favourites = Job_favourites::find($id);
        $job_favourites->delete();
        
        return redirect()->back();
    }
    public function show($id){
        $job_favourites = Job_favourites::find($id);
        return view('admin.quanly_job.show')->with([
                    '$quanly_job' => $quanly_job,
            ]);
    }


}
