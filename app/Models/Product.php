<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'img', 'category_id'];
    use HasFactory;

    // public function category(){
    //     return $this->belongsTo(Category::class, 'category_id', 'id');
    // }

    // public function images(){
    //     return $this->morphMany(Image::class, 'imageable');
    // }


    // public function getPriceAttribute(){
    //     return 'price:'.$this->attributes['price'];
    // }


    // public function setPriceAttribute($value){
    //     if (is_float($value)){
    //         $this->attributes['price'] = (int) ($value*100);
    //     }
    // }
}
