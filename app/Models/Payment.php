<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Payment extends Model
{
    use HasFactory;
    public function student(){
        return $this->belongsTo(student::class);
    }
public function max_payment(){
    DB::table('payment')->max('amount');
   
}
  

}
