<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sqits\UserStamps\Concerns\HasUserStamps;


class Label extends Model
{
    use HasFactory, HasUserStamps;

    protected $table = 'labels';



    public function artists()
    {
        return $this->hasMany(Artist::class, 'label_id');
    }
}
