<?php

namespace App\Http\Controllers;

use App\AccessLog;
use App\Logs;
use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class logsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
		$visitor = Visitor::find(session('visitor_id'));
		$visitor->cep = $request->input('cep');
		$visitor->city = $request->input('city');
		$visitor->save();

		Session::set('cep', $request->input('cep'));
		Session::set('city', $request->input('city'));

		Session::flash('message', 'dados de acesso salvos.');

		return redirect('/');
	}

	/**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function firstAccess(Request $request)
    {
        var_dump($request);
    }
}
