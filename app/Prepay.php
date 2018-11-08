<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prepay extends Model
{
    public function student(){
        return $this->belongsTo(Student::class,'student_id','id');
    }
}
