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
<<<<<<< HEAD
    public function location(){
        return $this->belongsTo(Location::class, 'id_location' , 'id');
    }
=======
    
   
>>>>>>> 1ed772e2400776f92a1647f85ebc6cd4af2bb960
     public function category(){
        return $this->belongsTo(Category::class, 'id_category' , 'id');
    }
}
