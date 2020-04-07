<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{

    public function users()
    {
        return $this->belongsToMany(Users::class, 'user_requests', 'request_id', 'user_id');
    }

    public function qualities()
    {
        return $this->belongsToMany(Qualities::class, 'request_qualities', 'request_id', 'quality_id');
    }

    public function address()
    {
        return $this->belongsTo(Addresses::class, 'address_id');
    }

    public function project()
    {
        return $this->belongsTo(Projects::class, 'project_id');
    }

}
