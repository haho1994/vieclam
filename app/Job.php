<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Job extends Model {
    use SoftDeletes;
    protected $table = 'jobs';
    protected $fillable = [
        'name',
        'id_company',
        'id_location',
        'id_skill',
        'salary',
        'id_category',
        'id_language',
        'id_user',
        'gender',
        'levels',
        'experience'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'id_company', 'id');
    }
    public function location()
    {
        return $this->belongsTo(Location::class, 'id_location', 'id');
    }
    public function skill()
    {
        return $this->belongsTo(Skill::class, 'id_skill', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class, 'id_language', 'id');
    }
}

