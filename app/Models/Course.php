<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'number_max_checkin'
    ];

    public function lesson()
    {
        $this->belongsTo('lesson');
    }


}
