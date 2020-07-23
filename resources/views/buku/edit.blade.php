@extends('template')

@section('main')
<div id="buku" style="margin-top: 2%;">

<center>
<h2>Edit Buku</h2>


<form action="{{url('buku/'.$buku->id.'/update')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="id" class="control-label ">KODE BUKU</label>
<input name="id" type="text" value="{{$buku->id}}" class="form-control col-md-4 text-md-center" readonly>
</div>

<div class="form-group">
<label for="judul" class="control-label">JUDUL BUKU</label>
<input name="judul" type="text" class="form-control col-md-4 text-md-center" value="{{$buku->judul}}" required>
</div>

<div class="form-group">
<label for="pengarang" class="control-label">PENGARANG</label>
<input name="pengarang" type="text" class="form-control col-md-4 text-md-center" value="{{$buku->pengarang}}" required>
</div>

<div class="form-group">
<label for="tahun_terbit" class="control-label">TAHUN TERBIT</label>
<input name="tahun_terbit" type="year" class="form-control col-md-4 text-md-center" value="{{$buku->tahun_terbit}}" required>
</div>

<div class="form-group">
<label for="stok" class="control-label">Stok</label>
<input name="stok" type="int" class="form-control col-md-4 text-md-center" value="{{$buku->stok}}" required>
</div>

<div class="form-group">
<label for="genre" class="control-label">Genre</label>
<input name="genre" type="text" class="form-control col-md-4 text-md-center" value="{{$buku->genre}}" required>
</div>

<div class="form-group">
<label for="gambar" class="control-label">Gambar</label>
<input name="gambar" type="file" class="form-control col-md-4 text-md-center" value="{{$buku->gambar}}" >
</div>


<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('buku/daftar')}}"class="btn btn-warning">Cancel</a>
</form>
</center>

</div>
@stop