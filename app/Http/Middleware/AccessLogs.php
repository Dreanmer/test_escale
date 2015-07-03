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

		if(!$request->session()->get('visitor_id')){

			$code = str_random(3);

			$visitor = new Visitor();
			$visitor->code = $code;
			$visitor->save();

			$ip_data = Location::get($ip);

			Session::put('code', $code);
			Session::put('visitor_id', $visitor->id);
			Session::put('ip_data', $ip_data);
			Session::put('ip', $ip);

		} else {

			if ($ip == Session::get('ip'))
				$ip_data = Session::get('ip_data');
			else
				$ip_data = Location::get($ip);

			$visitor = Visitor::find(Session::get('visitor_id'));

		};

		$localisation = implode(' ', [$ip_data->countryName, $ip_data->regionName, $ip_data->cityName, $ip_data->zipCode, "[".$ip_data->latitude.",".$ip_data->longitude."]"]);

		$access = new AccessLog();
		$access->ip = $ip;
		$access->approximate_location = $localisation;

		$visitor->logs()->save($access);

        return $next($request);
    }
}
