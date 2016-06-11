<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\Login;
use App\User;
use App\Job;
use App\Category;
use App\Location;
use App\Skill;

class SearchController extends Controller {

    public function index() {

        //dd(request()->all());
        $jobs = Job::take(20)->orderBy('id', 'desc')->get();
        $categories = Category::all();
        $locations = Location::all();
        return view('timkiem.timkiemvieclam', compact('jobs', 'categories', 'locations'));
    }

    public function tendnht() {
        $user = auth()->user();
        return view('layout.tendn', compact($user));
    }

    public function search() {
        $categories = Category::all();
        $skills = Skill::all();
        $company = \App\Company::all();
        //        if (request()->has('keyword')) {
        $job = Job::join('locations', 'locations.id', '=', 'jobs.id_location')
                ->select(['jobs.*']);
        
        if (request()->has('keyword') && !empty(request()->get('keyword'))) {
            $job->where('jobs.name', 'like', '%' . request()->get('keyword') . '%');
        }

        if (request()->has('category_id') && !empty(request()->get('category_id'))) {
            $job->where('jobs.id_category', '=', request()->get('category_id'));
        }

        if (request()->has('location_id') && !empty(request()->get('location_id'))) {
            $locations = request()->get('location_id');
            foreach ($locations as $location) {
                $job->orWhere('locations.name', 'LIKE', '%' . $location. '%');
            }
        }
        if (request()->has('skill_id') && !empty(request()->get('skill_id'))) {
            $job->where('jobs.id_skill', '=', request()->get('skill_id'));
        }
        $jobs = $job->get();
        return view('timkiem.show', compact('jobs', 'categories', 'locations', 'skills', 'company'));
    }

}
