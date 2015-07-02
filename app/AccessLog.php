<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    protected $table = 'access_log';

	public function visitor(){
		$this->belongsTo('App\Visitor');
	}

}
