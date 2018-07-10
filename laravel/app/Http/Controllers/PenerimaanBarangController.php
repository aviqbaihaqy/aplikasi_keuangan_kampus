<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PenerimaanBarangController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('cetak_penerimaan_barang')->setPaper('a4', 'landscape');
        return $pdf->download('penerimaanbarang.pdf');
    }
}
