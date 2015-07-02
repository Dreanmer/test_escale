<?php

namespace App\Http\Middleware;

use App\Visitor;
use App\AccessLog;
use Closure;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class AccessLogs
{
    public function handle($request, Closure $next)
    {
		$ip = !$request->ip ? '200.158.212.172' : $request->ip;
		$ip_data = Location::get($ip);
		$localisation = implode(' ', [$ip_data->countryName, $ip_data->regionName, $ip_data->cityName, $ip_data->zipCode, "[".$ip_data->latitude.",".$ip_data->longitude."]"]);

		if(!$request->session()->get('code')){

			$code = str_random(3);

			$visitor = new Visitor();
			$visitor->code = $code;
			$visitor->save();

			Session::set('code', $code);
			Session::set('visitor_id', $visitor->id);

		}else{

			$visitor = Visitor::find(session('visitor_id'));

		};

		$access = new AccessLog();
		$access->ip = $ip;
		$access->approximate_local = $localisation;

		$visitor->logs()->save($access);

        return $next($request);
    }
}
