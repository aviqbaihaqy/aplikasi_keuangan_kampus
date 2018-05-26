<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //diedit
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function index ()
	{
		return view('mahasiswa');
	}
}