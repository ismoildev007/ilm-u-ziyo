<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educational extends Model
{
    use HasFactory;

    protected $table = 'educationals';

    protected $fillable = [
      'title_uz',
      'title_ru',
      'title_en',
      'description_uz',
      'description_ru',
      'description_en',
      'short_content_uz',
      'short_content_ru',
      'short_content_en',
      'photo',
    ];
}
