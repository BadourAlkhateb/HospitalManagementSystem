<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surgery extends Model
{
    use HasFactory;
     
     public function patient()
  {
    return $this->belongsTo(patient::class , 'patient_id');
  }
   public function room()
  {
    return $this->belongsTo(room::class , 'room_id');
  }
}

