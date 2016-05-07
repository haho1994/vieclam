<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Curriculumvitalanguage extends Model {
    
    use SoftDeletes;
    
    protected $table = 'curriculumvitaes_languages';
    protected $fillable = [
        'id_curriculum_vitae',
        'id_language'
    ];
    
    public function language()
    {
        return $this->belongsTo(Language::class, 'id_language', 'id');
    }
    public function curriculumvita()
    {
        return $this->belongsTo(Curriculumvita::class, 'id_curriculum_vitae', 'id');
    }
}






