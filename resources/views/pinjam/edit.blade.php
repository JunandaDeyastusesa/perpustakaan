@extends('template')

@section('main')
<div id="pinjam">

<center>
<h2>Edit Buku</h2>


<form action="{{url('pinjam/'.$pinjam->id.'/update')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="id_anggota" class="control-label ">ID Anggota</label>
<input name="id_anggota" type="int" value="{{$pinjam->id}}" class="form-control col-md-4 text-md-center" readonly>
</div>

<div class="form-group">
<label for="kode_buku" class="control-label">Kode Buku</label>
<input name="kode_buku" type="int" class="form-control col-md-4 text-md-center" value="{{$pinjam->kode_buku}}" readonly="">
</div>

<div class="form-group">
<label for="tgl_pinjam" class="control-label">Tanggal Pinjam</label>
<input name="tgl_pinjam" type="date" class="form-control col-md-4 text-md-center" value="{{$pinjam->tgl_pinjam}}" readonly="">
</div>

<div class="form-group">
<label for="tgl_kembali" class="control-label">Tanggal Kembali</label>
<input name="tgl_kembali" type="date" class="form-control col-md-4 text-md-center" value="{{$pinjam->tgl_kembali}}" readonly>
</div>

<div class="form-group">
<label for="status" class="control-label">Status</label>
<input name="status" type="date" class="form-control col-md-4 text-md-center" value="{{$pinjam->status}}">
</div>

<div style="display:none"class="form-group">
<input name="denda" type="number" class="form-control col-md-4 text-md-center">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('buku')}}"class="btn btn-warning">Cancel</a>
</form>
</center>

</div>
@stop