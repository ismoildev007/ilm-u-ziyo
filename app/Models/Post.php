<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $table = 'posts';

    protected $fillable = [
      'partners_name'
    ];

    public function partner()
    {
        $this->hasMany(Partners::class);
    }
}
