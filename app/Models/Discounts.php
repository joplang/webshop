<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sqits\UserStamps\Concerns\HasUserStamps;


class Discounts extends Model
{
    use HasFactory, HasUserStamps;

    protected $table = 'discounts';
}
