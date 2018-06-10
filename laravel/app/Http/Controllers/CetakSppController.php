<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class CetakSppController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('cetak_spp')->setPaper('a4', 'landscape');
        return $pdf->download('spp.pdf');
    }
}
