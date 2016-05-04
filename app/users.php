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
    //protected $table = 'users';
    public $timestamps = false;
    protected $guarded = array();
     
    public function location(){
        return $this->belongsTo(Location::class, 'id_location' , 'id');
    }
     public function category(){
        return $this->belongsTo(Category::class, 'id_category' , 'id');
    }
   
}
