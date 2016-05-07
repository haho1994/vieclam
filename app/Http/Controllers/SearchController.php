<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\Login;
use App\User;
use App\Job;
use App\Category;
use App\Location;
class SearchController extends Controller {

    public function index() {
        
        //dd(request()->all());
        $jobs = Job::take(20)->orderBy('id', 'desc')->get();
        $categories = Category::all();
        $locations = Location::all();
        return view('timkiem.timkiemvieclam', compact('jobs','categories','locations'));
    }
    public function search(){
        if (request()->has('keyword')) {
            $job = Job::where('name', 'like', '%' . request()->get('keyword') . '%');
            
            if (request()->has('category_id') && !empty(request()->get('category_id'))) {
                $job->where('id_category', '=', request()->get('category_id'));
            }
            
            if (request()->has('location_id') && !empty(request()->get('location_id'))) {
                $job->where('id_location', '=', request()->get('location_id'));
            }
            $jobs = $job->get();
            return view('timkiem.ketqua', compact('jobs'));
        }
    }
}