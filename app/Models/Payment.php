<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public  function users(){
        $this->hasMany('users');
    }

    public function user()
    {
        $this->hasMany('users');
}
}


