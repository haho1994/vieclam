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
        $users = User::id();
        $job = Job::id();
        $user = auth()->user()->id;
        $job =auth()->job()->id;
        $job_favourite->save();
        return redirect()->back();
    }
}
