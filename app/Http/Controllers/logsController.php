<?php

namespace App\Http\Controllers;

use App\Logs;
use Illuminate\Http\Request;

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
    public function store()
    {
        $entry = new Logs;

		$entry->cep = '01311-200';
		$entry->city = 'São Paulo';

		$entry->save();
    }
}
