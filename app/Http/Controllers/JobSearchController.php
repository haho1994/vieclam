<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\Login;

class JobSearchController extends Controller {

    public function jobsearch($id){
        $job = \App\Job::find($id);
        return view('timkiem.jobsearch', compact('job'));
    }
}
