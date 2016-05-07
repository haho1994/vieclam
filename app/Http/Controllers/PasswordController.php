<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request\Login;
use App\User;
class PasswordController extends Controller {
 
  public function remind()
  {
    return View::make('password.remind');
  }
 
}