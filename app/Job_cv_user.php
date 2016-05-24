<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Job;
use App\User;
use App\Company;
use App\Job_cv_user;

class Job_cv_user extends Model {
    
    use SoftDeletes;
    
    protected $table = 'job_cv_users';
    protected $fillable = [
        'id_job',
        'id_user',
        'filename',
      
    ];
    public function job()
    {
        return $this->belongsTo(Job::class, 'id_job', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function company(){
        return $this-> belongtoMany(Company::class, 'id_company', 'id');
    } 

}


