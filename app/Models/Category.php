<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table='categories';
    protected $fillable =[
        'name',
        'image',
        'parent_id'
    ];

    public function child(){
        return $this->hasMany(Category::class,'parent_id');
    }

    public function product(){
        return $this->hasMany(Product::class,'category_id');
    }

}
