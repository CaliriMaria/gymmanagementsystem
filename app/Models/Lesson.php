<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'at_date',
        'course_id',
        'room_id',
        'user_id'

    ];

    public function users(){
        $this->hasMany('users');
    }

    public  function course()
    {
        $this->hasMany('course');
    }

    public function room()
    {
        $this->hasMany('rooms');
    }

    public function booking()
    {
        $this->belongsTo('booking');
    }
}
