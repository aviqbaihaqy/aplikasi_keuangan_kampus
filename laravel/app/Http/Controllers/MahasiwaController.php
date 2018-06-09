<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiwaController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    
    public function __construct(){
    	$this->middleware('auth');
    }

    /**
	*show the application dashboard
	*
	* @return \illuminate\http\responce
    */

    public function index()+{
    	return view(mahasiswa);
    }


}
