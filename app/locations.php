<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class locations extends Model {
    
    use SoftDeletes;
    
    protected $table = 'locations';
    
    protected $fillable = [
        'name',

    ];
    
}