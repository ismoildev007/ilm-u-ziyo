<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
      'partner_name',
    ];

    public function post()
    {
        return $this->hasOne(Post::class);
    }

}
