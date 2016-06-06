<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curriculumvita;
class DownloadController extends Controller {

    public function downloadCV($filename, $cvId) {
        $user = auth()->user();
        $director = public_path('upload/cv/'.$cvId .'/' . $filename);
        $file_extension = last(explode('.', $director));
        dd($director);
        switch ($file_extension) {
            case "pdf": $ctype = "application/pdf";
                break;
            case "zip": $ctype = "application/zip";
                break;
            case "doc": $ctype = "application/msword";
                break;
            case "xls": $ctype = "application/vnd.ms-excel";
                break;
            case "ppt": $ctype = "application/vnd.ms-powerpoint";
                break;
            case "docx": $ctype = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
                break;
            default: $ctype = "application/force-download";
        }
        //dd($director);
        header("Pragma: public"); // required
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private", false); // required for certain browsers 
        header("Content-Type: $ctype");
// change, added quotes to allow spaces in filenames, by Rajkumar Singh
        header("Content-Disposition: attachment; filename=" . basename($director) . "");
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: " . filesize($director));
        readfile("$director");
        exit();
    }
    public function downloadungtuyen($filename, $jobId) {
        $user = auth()->user();
        $director = public_path('upload/jobs/'. $jobId . '/cv/' . $user->id . '/' . $filename);
        $file_extension = last(explode('.', $director));
        //dd($director);
        switch ($file_extension) {
            case "pdf": $ctype = "application/pdf";
                break;
            case "zip": $ctype = "application/zip";
                break;
            case "doc": $ctype = "application/msword";
                break;
            case "xls": $ctype = "application/vnd.ms-excel";
                break;
            case "ppt": $ctype = "application/vnd.ms-powerpoint";
                break;
            case "docx": $ctype = "application/vnd.openxmlformats-officedocument.wordprocessingml.document";
                break;
            default: $ctype = "application/force-download";
        }
        //dd($director);
        header("Pragma: public"); // required
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private", false); // required for certain browsers 
        header("Content-Type: $ctype");
// change, added quotes to allow spaces in filenames, by Rajkumar Singh
        header("Content-Disposition: attachment; filename=" . basename($director) . "");
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: " . filesize($director));
        readfile("$director");
        exit();
    }
}
