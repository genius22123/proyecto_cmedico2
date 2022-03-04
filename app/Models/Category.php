<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;
class Category extends Model
{
    use HasFactory;

    //relacion uno a amaichos
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    //relacion unio a muchos ibersa

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
