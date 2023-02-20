<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'lesson_id'
    ];

    public  function users()
    {
        $this->hasMany('users');
    }

    public function lesson()
    {
        $this->hasMany('lessons');
    }

}
