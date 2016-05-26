<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notification';
    protected $fillable = [
        'username', 'type', 'hlink', 'details', 'uploader', 'date', 'view',
    ];

    public function getAll($username)
    {
    	return Notification::where('username', $username)->orderBy('created_at', 'desc')
                  ->paginate(5);
    }
}
