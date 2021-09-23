<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sqits\UserStamps\Concerns\HasUserStamps;
use App\Models\User;


class Review extends Model
{
    use HasFactory, HasUserStamps;

    protected $table = 'reviews';


    public function Reviewer($user_id)
    {


        $user = User::get()->where('id', $user_id);

        return $user;
    }
}
