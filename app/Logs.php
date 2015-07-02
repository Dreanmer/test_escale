<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    protected $table = 'access_logs';

	protected $fillable = ['cep', 'city'];

}
