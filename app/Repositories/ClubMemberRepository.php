<?php

namespace App\Repositories;

use App\User;
use App\Student;
use App\ClubMember;

class ClubMemberRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return ClubMember::where('member_username', $user->username)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}