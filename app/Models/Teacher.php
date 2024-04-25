<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title_uz',
        'title_ru',
        'title_en',
        'short_content_uz',
        'short_content_ru',
        'short_content_en',
        'photo',
    ];
}
