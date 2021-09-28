<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;
use Sqits\UserStamps\Concerns\HasUserStamps;


class Product extends Model
{
    use HasFactory, HasUserStamps;

    protected $table = 'products';
    protected $with = [
        'artist',
        'reviews',
        'genre',
        'label',
    ];



    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function label()
    {
        return $this->belongsTo(Label::class, 'label_id');
    }

    public static function showProduct($query, $id)
    {

        return $query->where('id', '=', $id);
    }


    public function scopePriceGreaterThan($query, $price)
    {
        return $query->where('price', '>=', $price);
    }

    public function scopePriceLesserThan($query, $price)
    {
        return $query->where('price', '<=', $price);
    }

    // public function scopeInStock($query){
    //    return $query->where('stock', '=', '1');
    //}

}
