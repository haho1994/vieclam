<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Curriculumvita extends Model {
    
    use SoftDeletes;
    
    protected $table = 'curriculumvitaes';
    protected $fillable = [
        'id_user',
        'year_experience',
        'highes_edu',
        'recent_company_id',
        'recent_category_id',
        'expected_position_id',
        'expected_location_id',
        'expected_salary',
        'current_job_level',
        'expected_job_level',
        'expected_job_category',
        'is_negotiable'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    
    public function company()
    {
        return $this->belongsTo(Company::class, 'recent_company_id', 'id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'recent_category_id', 'id');
    }
    public function location()
    {
        return $this->belongsTo(location::class, 'expected_location_id', 'id');
    }

}


