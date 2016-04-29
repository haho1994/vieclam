<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    
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
    //protected $table = 'users';
    public $timestamps = false;
    protected $guarded = array();
     
    public function user(){
        return $this->belongsTo('Locaton','id_location');
    }
   
}
