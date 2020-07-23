<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftarbkcontroller extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function buku(){
        $buku_list= Buku::all();
        return view('buku.index', compact('buku_list'));
    }
    public function data(){
        $buku_list= Buku::all();
        return view('buku.data', compact('buku_list'));
    }
    public function create(){
        $halaman='buku';
        return view('buku.create', compact('halaman'));
    }
    public function store(Request $request){

                if($request->hasFile('gambar')) {
                    $buku = Buku::create($request->all());
                    $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
                    $buku->gambar = $request->file('gambar')->getClientOriginalName();
                    $buku->save();

                    }else{
                        $buku = Buku::create($request->all());
                        $buku->save();
            }
        $buku->save();
        return redirect('buku');
    }
    
    public function show($id){
        $halaman = 'buku';
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('halaman','buku'));
    }
    public function edit($id){
        $halaman ='buku';
        $buku = Buku::findOrFail($id);
        return view('buku.edit',compact('halaman','buku'));
    }
    public function update($id, Request $request){
        $halaman = 'buku';
        $buku = Buku::findOrFail($id);
        $buku->id = $request->id;
        $buku->judul = $request->judul;
        $buku->pengarang = $request->pengarang;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->stok = $request->stok;
        $buku->save();

                if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $buku->gambar = $request->file('gambar')->getClientOriginalName();
        
        }
        $buku->save();
        return redirect('buku');
    }
    public function delete($id){
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect('buku');
    }
}
