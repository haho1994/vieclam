<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class job_favourites extends Model {
    
    use SoftDeletes;
    
    protected $table = 'job_favourites';
    protected $fillable = [
        'id_job',
        'id_user'
    ];
    public function jobs(){
        return $this->belongTo(job_favourites::class, 'id_job', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}


