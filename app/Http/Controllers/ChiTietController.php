<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Category;
use App\Location;
use App\Company;
class ChiTietController extends Controller {
     public function index($id){
        $job = \App\Job::find($id);
        return view('thongtin.chitiet', compact('job'));
    }
}

