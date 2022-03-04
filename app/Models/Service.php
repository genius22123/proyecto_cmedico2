<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Lesson;
use App\Models\Category;
class Service extends Model
{
    use HasFactory;

    protected $guarded = ['created_at','updated_at'];
    //relacion uno a muchos 

    public function types()
    {
        return $this->hasMany(Type::class);

    }


    //relacion uno a muchos 

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    
    
    
    //relacion uno a muchos 

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
