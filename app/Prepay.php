<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prepay extends Model
{
    protected $table = 'prepays';

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id','id');
    }

}
