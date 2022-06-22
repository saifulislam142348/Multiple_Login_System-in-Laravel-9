<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public function course(){
        return $this->hasMany(Course::class, 'department_id','id');
    }
    public function department(){
        return $this->belongsTo(user::class,  'department_id','id');
    }
}

