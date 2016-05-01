<?php

namespace App\Repositories;

use App\User;
use App\Teacher;

class TeacherRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Teacher::where('username', $user->username)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}
