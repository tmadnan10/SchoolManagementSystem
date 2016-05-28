<?php

namespace App\Policies;

use App\User;
use App\Club;


use Illuminate\Auth\Access\HandlesAuthorization;

class ClubPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
     public function destroy(User $user, Club $club)
    {
        return $user->username === $club->moderator_id;
    }
}
