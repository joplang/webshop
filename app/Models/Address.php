<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sqits\UserStamps\Concerns\HasUserStamps;


class Address extends Model
{
    use HasFactory, HasUserStamps;

    protected $table = 'addresses';
}
