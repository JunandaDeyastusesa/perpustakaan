<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use App\Buku;
use App\Anggota;
use App\Pinjam;
use App\User;
use PDF;

class pinjamcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pinjam(){

            $pinjam_list= Pinjam::all();
            return view('pinjam.index', compact('pinjam_list'));

        
    }
    public function cetak_pdf($id) {
        
        $halaman = 'pinjam';
        $pinjam_list = Pinjam::findOrFail($id);
        $pdf = PDF::loadview('pinjam.pinjam_pdf',compact('halaman', 'pinjam_list'));
        return $pdf->download('laporan-pinjam.pdf');
    }

        public function store(Request $request){
        // // Pinjam::create($request->all());

        // $kurang = Buku::where('id','=',$request->kode_buku)->get();
        // foreach($kurang as $kur){
        //     $hasil = $kur->stok - 1;
        //     $kur->stok = $hasil;
        //     $kur->save();
        // }
        // return redirect('pinjam');
            $pinjam = Pinjam::create($request->all());

                $time = $request->tgl_pinjam;
                $timesum = date('Y-m-d', strtotime('+7 days', strtotime($time)));
                $pinjam->tgl_kembali = $timesum;
                $pinjam->save();

$kurang = Buku::where('id','=',$request->kode_buku)->get();
        foreach($kurang as $kur){
            $hasil = $kur->stok - 1;
            $kur->stok = $hasil;
            $kur->save();
        }
        return redirect('pinjam');
            

    }

	    public function show($id){
        $pinjam = Pinjam::findOrFail($id);
        $anggota = User::all();
        $halaman = 'pinjam';
        return view('pinjam.show', compact('halaman','pinjam','anggota'));
    }   

        public function create(){
        $anggota = User::all();
        $buku = Buku::all();
        $pinjam = Pinjam::all();
        $halaman='pinjam';
        return view('pinjam.create', compact('halaman', 'anggota', 'buku', 'pinjam'));
    }

        public function edit($id){
        $halaman ='pinjam';
        $pinjam = Pinjam::findOrFail($id);
        return view('pinjam.edit',compact('halaman','pinjam'));
    }

        public function update($id, Request $request){
        $halaman = 'pinjam';
        $pinjam = Pinjam::findOrFail($id);
        $pinjam->kode_buku = $request->kode_buku;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->tgl_kembali = $request->tgl_kembali;
        $pinjam->status = $request->status;
        $kurang = Buku::where('id','=',$request->kode_buku)->get();
        foreach($kurang as $kur){
            $hasil = $kur->stok + 1;
            $kur->stok = $hasil;
            $kur->save();
        }

        $date1 = strtotime($request->tgl_kembali);
        $date2 = strtotime($pinjam->status);

        $diff = floor($date1 - $date2);

        if ($diff > 0) {
            $years = floor($diff / (365*60*60*24));

            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

            $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));   

            $pinjam->denda = 0;
            $pinjam->save();

        }else{
            $pinjam->denda = 5000;
            $pinjam->save();
        }

        return redirect('pinjam');
    }

        public function delete($id){
        $pinjam = Pinjam::findOrFail($id);
        $pinjam->delete();
        return redirect('pinjam');
    }
    
}
