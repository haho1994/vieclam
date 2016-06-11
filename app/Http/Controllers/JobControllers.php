<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Curriculumvita;
use App\User;
use App\Company;
use App\Category;
use App\Location;
use App\Job_favourite;

class JobControllers extends Controller {
public function destroy($id){
        $job_favourite = Job_favourite::find($id);
        $job_favourite->delete();
        return redirect()->back();
    }
}