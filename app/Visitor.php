<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitor';

	protected $fillable = ['cep', 'city'];

	public function logs(){
		return $this->hasMany('App\AccessLog');
	}

}
