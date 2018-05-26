<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * show the aplication dashboard.
     * 
     * @return \illuminate\http\response
     */
    public function index()
    {
        return view('mahasiswa');
    }
}
