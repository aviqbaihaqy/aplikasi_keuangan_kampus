<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemakaianBarangController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('cetak_pemakaian_barang')->setPaper('a4', 'landscape');
        return $pdf->download('pemakaianbarang.pdf');
    }
}
