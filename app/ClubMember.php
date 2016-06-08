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
    public function getAll($club_id)
    {
        return ClubMember::where('club_id', $club_id)->get();
    }
    public function editMemberStatus($id, $new)
    {
    return ClubMember::where('id', $id)->update(['membership_status' => $new]);
    }
        public function getME($username, $club_id)
    {
        return ClubMember::where('club_id', $club_id)->where('member_username', $username)->first();
    }
}
