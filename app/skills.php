<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class skills extends Model {
    
    use SoftDeletes;
    
    protected $table = 'skills';
    protected $fillable = [
        'name',
        'id_user'
        
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}


