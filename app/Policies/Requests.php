<?php

namespace App\Policies;

use App\Models\Users;
use Illuminate\Auth\Access\HandlesAuthorization;

class Requests
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
