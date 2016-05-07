<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    
   protected $table = 'users';
   
   use SoftDeletes;
   
   protected $fillable = [
       'full_name',
       'brithday',
       'email',
       'phone',
       'address',
       'password',
       'id_category',
       'salary',
       
   ];
    
   
     public function category(){
        return $this->belongsTo(Category::class, 'id_category' , 'id');
    }
}
