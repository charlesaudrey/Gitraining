<?php

namespace App\Policies;

use App\Navigation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NavigationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the navigation.
     *
     * @param  \App\User  $user
     * @param  \App\Navigation  $navigation
     * @return mixed
     */
    public function update(User $user, Navigation $navigation)
    {
        return false;
    }
}
