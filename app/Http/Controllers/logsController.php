<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;

class logsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($order = "visitor.created_at", $direction = "asc")
    {
		$logs = (new Visitor())->listLogs($order, $direction);

		return view('logs', compact('logs', 'order', 'direction'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
    public function store(Request $request)
    {
		require_once(app_path() . '/Helpers/correios.php');

		$cep = $request->input('cep');
		$address_data = getAddressByCEP($cep);
		$location = $address_data['UF'] . ' - ' . $address_data['Cidade'];
		$location .= isset($address_data['Bairro']) ? ' - ' . $address_data['Bairro'] : "";
		$location .= isset($address_data['Logradouro']) ? ' - ' . $address_data['Logradouro'] : "";

		$visitor = Visitor::find(session('visitor_id'));
		$visitor->cep = $cep;
		$visitor->city = $location;
		$visitor->save();

		$request->session()->put([
			'cep' => $request->input('cep'),
			'city' => $request->input('city')
		]);

		Session::flash('message', 'dados de acesso salvos.');

		return redirect('/');
	}
}
