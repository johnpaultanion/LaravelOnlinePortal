<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'comment',
        'video_section_id'
        
    ];

}
