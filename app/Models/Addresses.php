<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{

    public function user()
    {
        return $this->hasMany(Users::class, 'address_id');
    }

    public function projects()
    {
        return $this->hasMany(Projects::class, 'address_id');
    }    

    public function organisations()
    {
        return $this->hasMany(Organisations::class, 'address_id');
    }

    public function requests()
    {
        return $this->hasMany(Requests::class, 'address_id');
    }

}
