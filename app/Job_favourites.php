<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Jobs;

class Job_favourites extends Model {
    
    use SoftDeletes;
    
    protected $table = 'job_favourites';
    protected $fillable = [
        'id_job',
        'id_user'
    ];
    public function jobs(){
        return $this->belongTo(Jobs::class, 'id_job', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}


