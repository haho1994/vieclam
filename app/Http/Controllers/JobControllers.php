<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Curriculumvita;
use App\User;
use App\Company;
use App\Category;
use App\Location;

class JobControllers extends Controller {
public function destroy($id){
        $curriculumvita = Curriculumvita::find($id);
        $curriculumvita->delete();
        return redirect()->back();
    }
}