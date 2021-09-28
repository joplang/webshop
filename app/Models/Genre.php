<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sqits\UserStamps\Concerns\HasUserStamps;


class Genre extends Model
{
    use HasFactory, HasUserStamps;

    protected $table = 'genres';





    public function products()
    {
        return $this->hasMany(Product::class, 'genre_id');
    }
}
