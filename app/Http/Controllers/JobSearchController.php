<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\Login;
use App\User;
use App\Job_favourite;
use App\Job;
use App\Curriculumvita;
use App\Company;
use App\Category;
use App\Location;
use App\Language;
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
  
     public function vieclam() {
        $user = auth()->user();
        $job_favourites = Job_favourite::all();
        return view('thongtin.vieclam',  compact('job_favourites','user'));
        
    }
   
    public function nopdon() {
        $user = auth()->user();
         $job = Job::all();
         $user = User::all();
        return view('thongtin.nopdon')->with([
                    'jobs' => $job,
                    'users' => $user
        ]);
    }
}
