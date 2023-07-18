<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $table='product_color_size';
    protected $fillable =[
        'product_size_id',
        'product_color_id',
        'quantity',
        'price_two',
        'discount',
        'status'

    ];


    public function productColor(){
        return $this->belongsTo(ProductColor::class);
    }


    public function productSize(){
        return $this->belongsTo(ProductSize::class);
    }
}
