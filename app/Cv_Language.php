<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv_Language extends Model {
    
    use SoftDeletes;
    
    protected $table = 'curriculumvitaes_languages';
    protected $fillable = [
        'id_curriculum_vitae',
        'id_language'
    ];
    public function cv()
    {
        return $this->belongsTo(Job::class, 'id_curriculum_vitae', 'id');
    }
    public function language()
    {
        return $this->belongsTo(User::class, 'id_language', 'id');
    }
}
