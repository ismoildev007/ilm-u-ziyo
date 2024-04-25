<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPhoto extends Model
{
    use HasFactory;

    protected $table = 'student_photos';

    protected $fillable = [
      'student_photos'
    ];
}
