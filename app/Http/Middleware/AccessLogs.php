<?php

namespace App\Http\Middleware;

use App\Visitor;
use App\AccessLog;
use Closure;
use Illuminate\Support\Facades\Session;

class AccessLogs
{
    public function handle($request, Closure $next)
    {
		if(!$request->session()->get('code')){
			$code = str_random(3);

			$visitor = new Visitor();
			$visitor->code = $code;
			$visitor->save();

			$access = new AccessLog();
			$access->ip = !$request->ip ? '127.0.0.1' : $request->ip;

			$visitor->logs()->save($access);

			Session::set('code', $code);
			Session::set('visitor_id', $visitor->id);
		};

        return $next($request);
    }
}
