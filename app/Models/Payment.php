<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    public function user(){
        return $this->hasMany(user::class, 'user_id','id' );
    }
    public function student(){
        return $this->hasMany(Student::class, 'department_id','id' );
    }


}
