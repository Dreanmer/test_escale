<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class addressController extends Controller {

	public function getAddress($cep){
		require_once(app_path() . '/Helpers/correios.php');
		return response()->json(getAddressByCEP($cep));
	}
}
