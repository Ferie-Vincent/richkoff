<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'source',
        'auteur',
        'url',
        'image',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];
}
