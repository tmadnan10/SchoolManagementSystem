<?php

namespace App\Repositories;

use App\User;
use App\Teacher;
use App\Club;

class ClubRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forTeacher(User $user)
    {
        return Club::where('moderator_id', $user->username)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}