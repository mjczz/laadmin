<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public function prepays()
    {
        return $this->hasMany(Prepay::class,'student_id','id');
    }
}
