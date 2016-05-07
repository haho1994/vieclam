<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewJob extends Model {
    
    use SoftDeletes;
    
    protected $table = 'news';
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'status_new',
        'user_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}


