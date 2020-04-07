<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{

    public function address()
    {
        return $this->belongsTo(Addresses::class, 'address_id');
    }

    public function organisation()
    {
        return $this->belongsTo(Organisations::class, 'organisation_id');
    }

    public function requests()
    {
        return $this->hasMany(Requests::class, 'project_id');
    }

}
