<?php

namespace App\Policies;

use App\User

class ProductPolicy
{

    public function create(User $user)
    {
    	return $user->hasRole('admin');
    }
}
