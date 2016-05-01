<?php

namespace App\Repositories;

use App\User;
use App\Student;

class StudentRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Student::where('username', $user->username)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}