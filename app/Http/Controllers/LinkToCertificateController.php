<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LinkToCertificateController extends Controller
{
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
     * Show the dexpose certificate.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('certificate');
    }
}
