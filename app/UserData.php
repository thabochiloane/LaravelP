<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'user_data';
    protected $fillable = [
        'name', 'surname', 'idNumber', 'mobileNumber', 'email', 'dateOfBirth', 'language', 'interests'
    ];
	
	public function setInterestAttribute($value)
    {
        $this->attributes['interests'] = json_encode($value);
    }

    public function getInterestAttribute($value)
    {
        return $this->attributes['interests'] = json_decode($value);
    }

}
