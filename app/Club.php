<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
    protected $table = 'club';


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
