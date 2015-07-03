<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Visitor extends Model
{
    protected $table = 'visitor';

	protected $fillable = ['cep', 'city'];

	public function logs(){
		return $this->hasMany('App\AccessLog');
	}

	public function listLogs($order, $direction){
		return Visitor::join('access_log', 'access_log.visitor_id', '=', 'visitor.id')
			->select('*', DB::raw('count(access_log.ip) as hits'))
			->groupBy('code')
			->orderBy($order, $direction)
			->paginate(10);
	}

}
