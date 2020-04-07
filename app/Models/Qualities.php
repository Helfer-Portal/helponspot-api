<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualities extends Model
{

    public function users()
    {
        return $this->belongsToMany(Users::class, 'user_qualities', 'quality_id', 'user_id');
    }

    public function requests()
    {
        return $this->belongsToMany(Requests::class, 'request_qualities', 'quality_id', 'request_id');
    }

}
