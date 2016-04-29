<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model {
    
   protected $table = 'users';
   
   use SoftDeletes;
   
   protected $fillable = [
       'full_name',
       'password',   
       'brithday',
       'email',
       'phone',
       'address',
       
   ];
  
   
}
