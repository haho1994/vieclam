<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable implements CanResetPassword {
    
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

    public function location(){
        return $this->belongsTo(Location::class, 'id_location' , 'id');
    }

    
    
     public function category(){
        return $this->belongsTo(Category::class, 'id_category' , 'id');
    }
//     public function favourite(){
//        return $this-> belongtoMany(job_favourite::class, 'id');
//    } 
    public function favouriteJob()
    {
        return $this->belongsToMany(Job::class, 'job_favourites', 'id_user', 'id_job');
    }
     public function JobCv()
    {
        return $this->belongsToMany(Job::class, 'job_cv_users', 'id_user', 'id_job');
    }

}
