@extends('template')

@section('main')
<div id="buku">
<center>
<h2>Tambah Buku</h2>

<form action="{{ url('buku') }}" method="post">


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

<div class="form-check">
<label for="exampleFormControlTextArea">Gambar</label>
	<input type="file" name="gambar" class="form-control col-md-4 text-md-center">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('buku')}}" class="btn btn-warning">Kembali</a>
</form>
</center>
<div>
@stop
