<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
   
    public function department(){
        return $this->belongsTo(department::class, 'department_id','id');
    }
    public function course(){
        return $this->hasMany(Course::class, 'id','course_id' );
    }
    public function payment(){
        return $this->belongsTo(Payment::class, 'student_id' , 'id' );
    }

}
