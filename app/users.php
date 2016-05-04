<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class users extends Authenticatable {
    
   protected $table = 'users';
   
   use SoftDeletes;
   
   protected $fillable = [
       'full_name',
       'password',   
       'brithday',
       'email',
       'phone',
       'address',
       'id_location',
       'id_category'
       
   ];
<<<<<<< HEAD:app/users.php
    //protected $table = 'users';
    public $timestamps = false;
    protected $guarded = array();
     
    public function location(){
        return $this->belongsTo(Location::class, 'id_location' , 'id');
    }
     public function category(){
        return $this->belongsTo(Category::class, 'id_category' , 'id');
    }
=======
    
>>>>>>> c803c0e53dd92797c100f180296dc0c59d4f9a74:app/User.php
   
}
