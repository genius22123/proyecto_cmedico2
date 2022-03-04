<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Service;
use App\Models\Category;
class Lesson extends Model
{
    use HasFactory;

    //relacion unoa muchos
    public function types()
    {
        return $this->hasMany(Type::class);
    }

    //relacion unio a muchos ibersa

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    //relacion unio a muchos ibersa

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
