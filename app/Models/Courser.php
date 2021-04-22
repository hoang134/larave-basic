<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courser extends Model
{
    use HasFactory;
 public function subjects()
 {
     return $this->belongsToMany(Subject::class,'courser_subject','subject_id','courser_id');
 }
}
