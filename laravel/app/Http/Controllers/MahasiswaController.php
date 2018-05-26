<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
	* 
	*
	* @return void
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	* 
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		return view('Mahasiswa');
	}

	
		
}
