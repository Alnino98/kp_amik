<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rapb;

class RapbController extends Controller
{
    public function rapb()
    {
        $rapb = rapb::paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function saverapb(Request $request)
    {
        $this->validate($request, [
            'uraian_rapb' => 'required',
            'semester' => 'required',
            'jumlah_mhs' => 'required',
            'jumlah_sks' => 'required',
            'besarnya' => 'required'
        ]);        
        $jumlah100 = $request->besarnya * $request->jumlah_mahasiswa;
        $rapb = rapb::create([
            'URAIAN_RAPB' => $request->uraian_rapb,
            'KATEGORI_RAPB' => $request->kategori_rapb,
            'SEMESTER' => $request->semester,
            'JML_MHS' => $request->jumlah_mahasiswa,
            'JML_SKS' => $request->jumlah_sks,
            'BESARNYA' => $request->besarnya,
            'JML_100' => $request->jumlah_100,
            'JML_90' => $jumlah_90
        ]);
        return redirect('/rapb');
    }

    //Transitoris
    public function danaBangunan()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "DANA BANGUNAN")->paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function biayaTetap()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "BIAYA TETAP")->paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function biayaSKS()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "BIAYA SKS")->paginate(5);
        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function biayaPraktikum()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "BIAYA PRAKTIKUM")->paginate(5);
        return view('rapb.rapb', ['rapb'=>$rapb]);
    }

    //Non-Transitoris
    public function registrasi()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "REGISTRASI")->paginate(5);
        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function perpustakaan()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "PERPUSTAKAAN")->paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function kemahasiswaan()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "KEMAHASISWAAN")->paginate(5);
        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function kerjaPraktek()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "KERJA PRAKTEK")->paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function tugasAkhir()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "TUGAS AKHIR")->paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function biayaPBMA()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "BIAYA PBMA")->paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function biayaUTS()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "BIAYA UTS")->paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function biayaUAS()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "BIAYA UAS")->paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
    public function biayaWisuda()
    {
        $rapb = rapb::where('KATEGORI_RAPB', '=', "BIAYA WISUDA")->paginate(5);

        return view('rapb.rapb', ['rapb'=>$rapb]);
    }
}
