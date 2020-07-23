@extends('template')

@section('main')
<div id="buku" style="margin-top: 3%;">
<center>
<h2>Tambah Buku</h2>

<form action="{{ url('buku') }}" enctype="multipart/form-data" method="post">
@csrf

<div class="form-group">
<label for="judul" class="control-label">JUDUL</label>
<input name="judul" type="text" class="form-control col-md-4 text-md-center">
</div>

<div class="form-group">
<label for="pengarang" class="control-label">PENGARANG</label>
<input name="pengarang" type="text" class="form-control col-md-4 text-md-center">
</div>

<div class="form-group">
<label for="tahun_terbit" class="control-label">TAHUN TERBIT</label>
<input name="tahun_terbit" type="year" class="form-control col-md-4 text-md-center">
</div>

<div class="form-group">
<label for="stok" class="control-label">Stok</label>
<input name="stok" type="int" class="form-control col-md-4 text-md-center" required>
</div>

<div class="form-group">
<label for="genre" class="control-label">Genre</label>
<input name="genre" type="text" class="form-control col-md-4 text-md-center" required>
</div>

<div class="form-check">
<label for="exampleFormControlTextArea">Gambar</label>
	<input type="file" name="gambar" class="form-control col-md-4 text-md-center">
</div>

<div style="margin-top: 2%;">
<button type="submit" class="btn btn-outline-secondary">Submit</button>
<a href="{{url('buku/daftar')}}" class="btn btn-outline-dark">Kembali</a>
</div>

</form>
</center>
<div>
@stop
