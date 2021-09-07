<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sqits\UserStamps\Concerns\HasUserStamps;


class Cart extends Model
{
    use HasFactory, HasUserStamps;

    protected $table = 'cart';
}
