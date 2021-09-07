<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sqits\UserStamps\Concerns\HasUserStamps;


class Product extends Model
{
    use HasFactory, HasUserStamps;

    protected $table = 'products';






    public function scopePriceGreaterThan($query, $price){
        return $query->where('price', '>=', $price);
    }

    public function scopePriceLesserThan($query, $price){
        return $query->where('price', '<=', $price);
    }

   // public function scopeInStock($query){
   //    return $query->where('stock', '=', '1');
   //}

}
