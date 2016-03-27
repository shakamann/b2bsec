<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tocController extends Controller
{
    //
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the Table of Contents page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('toc');
    }
}
