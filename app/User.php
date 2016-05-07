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
       'id_location',
       'id_category',
       'salary',
       'description'
       
   ];
    public function location(){
        return $this->belongsTo(Location::class, 'id_location' , 'id');
    }
     public function category(){
        return $this->belongsTo(Category::class, 'id_category' , 'id');
    }
}
