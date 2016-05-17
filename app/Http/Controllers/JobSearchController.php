<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\Login;
use App\User;
use App\job_favourite;
use App\Job;

class JobSearchController extends Controller {

    public function jobsearch($id){
        $job = Job::find($id);
        return view('timkiem.jobsearch', compact('job'));
    }
    public function savejob($id){
          $user = auth()->user(); 
          $user->favouriteJob->attach($job);
          \Session::flash('sauccess', 'Sua thanh cong');
          
    }
    
}
