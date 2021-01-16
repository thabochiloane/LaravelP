<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'user_data';
    protected $fillable = [
        'name', 'surname', 'idNumber', 'mobileNumber', 'email', 'dateOfBirth', 'language', 'interests'
    ];

}
