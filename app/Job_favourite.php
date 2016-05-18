<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job_favourite extends Model {
    
    use SoftDeletes;
    
    protected $table = 'job_favourites';
    protected $fillable = [
        'id_job',
        'id_user'
    ];
    public function job()
    {
        return $this->belongsTo(Job::class, 'id_job', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
//    public function favourite(){
//        return $this-> belongtoMany(job_favourite::class, 'i_user', 'id');
//    } 

}


