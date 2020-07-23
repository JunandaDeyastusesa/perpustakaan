@extends('template')

@section('main')
<div id="pinjam">

<!-- -->


<center>
<h2 style="margin-top: 3%;">FORM PEMINJAMAN</h2>

<form action="{{ url('pinjam') }}" method="post">
@csrf
<div class="form-group">


<!-- NAMA PEMINJAM -->	
<div class="form-group">
<label for="id_anggota" class="control-label">Nama</label>

<select class="form-control col-md-4 col-form-label text-center" type="text"  name="id_anggota">
            @foreach ($anggota as $anggota)
            <option value="{{$anggota->id}}">>{{$anggota->name}}</option>
            @endforeach
</select>
</div>

<div class="form-group">
<label for="kode_buku" class="control-label">Kelas</label>

<select class="form-control col-md-4 col-form-label text-center" type="text"  name="kode_buku">
            @foreach ($buku as $buku)
            <option value="{{$buku->id}}">>{{$buku->judul}}</option>
            @endforeach
</select>
</div>

<!-- TANGGAL PINJAM -->
<div class="form-group">
<label for="tgl_pinjam" class="control-label">Tanggal Pinjam</label>
<input name="tgl_pinjam" type="date" class="form-control col-md-4 text-center">
</div>

<!-- TANGGAL KEMBALI -->
<div class="form-group">
<label for="tgl_kembali" class="control-label">Tanggal kembali</label>
<input name="tgl_kembali" type="date" value="null" class="form-control col-md-4 col-form-label text-center" readonly>
</div>

</div>
<a href="{{url('buku')}}" class=" btn btn-warning">Kembali</a>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</center>
@stop