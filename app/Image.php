<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model {
    
    use SoftDeletes;
    
    protected $table = 'images';
    protected $fillable = [
        'target_id',
        'target_content',
        'name'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
//    public function location(){
//        return $this->hasOne('locations','name');

}


