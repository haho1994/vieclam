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

    public function jobsearch($id) {
        $job = Job::find($id);
        return view('timkiem.jobsearch', compact('job'));
    }

    public function savejob($id) {
        $user = auth()->user();
        $user->favouriteJob()->sync([$id]);

        return redirect()->back();
    }

    public function index() {
        $user = auth()->user();
        $curriculumvitae = Curriculumvita::all();
        return view('thongtin.hoso', compact('curriculumvitae', 'user'));
    }

//     public function nopdon() {
//         $user->auth()->user();
//         $user->favouriteJob()->attach([$id]);
//         $jobcv = Job_cv_user::all();
//        return view('thongtin.nopdon', compact('$user','$job'));
//    }

    public function vieclam() {
        $user = auth()->user();
        $job_favourites = Job_favourite::all();
        return view('thongtin.vieclam', compact('job_favourites', 'user'));
    }

    public function nopdon() {
        $user = auth()->user();
        $jobId = request()->get('id');
        $job = Job::find($jobId);
        return view('thongtin.nopdon')->with([
                    'job' => $job,
                    'user' => $user
        ]);
    }

    public function nopdonCV($jobId) {
        $user = auth()->user();
        $file = request()->file('cv');

        $director = public_path('upload/jobs/' . $jobId . '/cv/' . $user->id);
        //move_uploaded_file($file->getPathName(), $director.'/abc.doc');

        \File::makeDirectory($director, $mode = 0777, true, true);
        $fileName = gen_uuid();
        $file->move($director, $fileName . '.' . $file->getClientOriginalExtension());
        
        $jobCv = $user->JobCv()->attach($jobId, [
            'filename' => $fileName . '.' .$file->getClientOriginalExtension()
        ]);
        return redirect()->back();
    }

}
