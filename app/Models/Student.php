<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function payment(){
        return $this->hasMany(payment::class, 'student_id','id' );
    }
    public function department(){
        return $this->hasMany(department::class);
    }
    public function course(){
        return $this->hasMany(Course::class, 'department_id','id' );
    }
}
