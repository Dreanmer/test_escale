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
		$visitor = Visitor::find(session('visitor_id'));
		$visitor->cep = $request->input('cep');
		$visitor->city = $request->input('city');
		$visitor->save();

		$request->session()->put(['cep' => $request->input('cep'), 'city' => $request->input('city')]);

		Session::flash('message', 'dados de acesso salvos.');

		return redirect('/');
	}
}
