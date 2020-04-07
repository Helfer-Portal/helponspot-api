<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organisations extends Model
{

    public function address()
    {
        return $this->belongsTo(Addresses::class, 'address_id');
    }

    public function projects()
    {
        return $this->hasMany(Projects::class, 'organisation_id');
    }

}
