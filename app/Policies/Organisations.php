<?php

namespace App\Policies;

use App\Models\Users;
use Illuminate\Auth\Access\HandlesAuthorization;

class Organisations
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
