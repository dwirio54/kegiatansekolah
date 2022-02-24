<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;


class ResultController extends Controller
{
    public function show($id)
    {
        $peserta = Register::findOrFail($id);
        return view('barcode', compact('peserta'));
    }
}
