<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\Login;
use App\User;
use App\job_favourite;
use App\Job;
use App\Curriculumvita;
class JobSearchController extends Controller {

    public function jobsearch($id){
        $job = Job::find($id);
        return view('timkiem.jobsearch', compact('job'));
    }
    public function savejob($id){
          $user = auth()->user(); 
          $user->favouriteJob()->sync([$id]);
          \Session::flash('sauccess', 'Sua thanh cong');
          return redirect()->back();
          
    }
    public function index() {
        $user = auth()->user();
        $curriculumvitae = Curriculumvita::all();
        return view('thongtin.hoso',  compact('curriculumvitae','user'));
        
    }
    
     public function nopdon() {
         $user->auth()->user();
         $user->favouriteJob()->attach([$id]);
         $jobcv = Job_cv_user::all();
        return view('thongtin.nopdon', compact('$user','$job'));
    }
     public function vieclam() {
        $user = auth()->user();
        $job_favourites = Job_favourite::all();
        return view('thongtin.vieclam',  compact('job_favourites','user'));
        
    }
}
