<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sqits\UserStamps\Concerns\HasUserStamps;
use App\Models\Product;
use App\Models\Label;


class Artist extends Model
{
    use HasFactory, HasUserStamps;

    protected $table = 'artists';


    //functions
    public function products()
    {

        return $this->hasMany(Product::class, 'artist_id');
    }
    public function label()
    {

        return $this->belongsTo(Label::class, 'label_id');
    }
}
