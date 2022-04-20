<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'img', 'parent_id'];
    use HasFactory;


    public function products(){
        return $this->hasMany(Product::class, 'category_id', 'id') ;
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }

}
