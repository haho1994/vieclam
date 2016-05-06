<?php

namespace App;
use App\Report;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model {
    
    use SoftDeletes;
    
    protected $table = 'report';
    
    protected $fillable = [
        'to_user_id',
        'reason',
        'from_user_id',
        'description'

    ];
    
}