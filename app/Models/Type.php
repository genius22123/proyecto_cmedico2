<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
class Type extends Model
{
    use HasFactory;
    //relacion unversa

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

      //relacion unversa

      public function lesson()
      {
          return $this->belongsTo(Lesson::class);
      }


}
