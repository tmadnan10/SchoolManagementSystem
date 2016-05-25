<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubMember extends Model
{
    protected $table = 'clubMember';
    protected $fillable = [
        'member_username', 'club_id', 'membership_status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function club()
    {
        return $this->hasOne(Club::class);
    }
}
