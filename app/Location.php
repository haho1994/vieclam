<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model {
    
    use SoftDeletes;
    
    protected $table = 'locations';
    protected $fillable = [
        'name'
    ];
    //class User extends Eloquent{
   // protected $table = 'location';
    public $timestamps = false;
    protected $guarded = array();
     
    public function location_id(){
        return $this->hasOne('User');
    }
}

