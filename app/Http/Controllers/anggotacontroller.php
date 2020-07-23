<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use App\User;
use App\Buku;

class anggotacontroller extends Controller
{       
        public function __construct()
    {
        $this->middleware('auth');
    }

        public function anggota(){

            if(Auth::user()->role == '1'){
                $halaman = 'anggota';
                $anggota_list= User::orderBy('role','asc')->paginate(10);
        return view('anggota.index', compact('anggota_list','halaman'));
            }else{
                return redirect('homepage');
            }
        
    }

        public function create(){

            if(Auth::user()->role == '1'){
                $halaman='anggota';
                return view('anggota.create', compact('halaman'));
            }else{
                return redirect('homepage');
            }
        
    }

    public function store(Request $request){
    	User::create($request->all());
		return redirect('anggota');
    }


    public function show($id){
        $anggota = User::findOrFail($id);
        if (Auth::user()->role == 1 || Auth::user()->id == $anggota->id) {
            $halaman = 'anggota';
            return view('anggota.show', compact('halaman','anggota'));
        }else{
            return redirect('homepage');
        }
    }

    public function cari(Request $request){
        if (Auth::user()->role == '1') {
        $cari = $request->cari;
        $anggota = User::where('name', 'like',"%".$cari."%")->paginate();
        return view('anggota.index',['anggota_list' => $anggota]);
    }else{
        return redirect('homepage');
    }
    }
        public function delete($id){
        $anggota = User::findOrFail($id);
        $anggota->delete();
        return redirect('anggota');
    }
    
}
