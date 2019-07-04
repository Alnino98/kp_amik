<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mutasi;

class MutasiController extends Controller
{
    public function index(Mutasi $mutasi)
    {
        $mutasi = Mutasi::all();

        return view('mutasi', compact('mutasi'));
    }
}
