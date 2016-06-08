<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
	protected $table = 'search';
    protected $fillable = [
        'key_', 'details', 'hlink',
    ];

    public function getAll($key)
    {
    	return Search::where('key_', $key)->paginate(50);
    }


}
