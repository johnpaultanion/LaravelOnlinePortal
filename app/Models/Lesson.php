<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'thumbnail',
        'video_name',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function categories(){
        return $this->hasMany(Category::class);
    }
    
}
