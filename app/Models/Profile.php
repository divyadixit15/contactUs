<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'location',
        'profile_image',
       
    ];
}
