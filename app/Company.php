<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model {
    
    use SoftDeletes;
    
    protected $table = 'companies';
    protected $fillable = [
        'name',
        'user_id',
        'address',
        'email',
        'phone',
        'description',
        'status'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
//    public function location(){
//        return $this->hasOne('locations','name');

}


