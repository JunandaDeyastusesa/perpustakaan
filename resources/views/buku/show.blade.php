@extends('template')

@section('main')
  <div id="buku">


    <center>
      <br>
    <h2>Detail Buku</h2>
<br>
<div class="card mb-3 " style= "padding-bottom: 3%; max-width: 600px;">
  <div class="row no-gutters">
    <div class="col-md-4 bg-dark">
      <img style="padding-top: 14%; width: 95%" src="{{asset('img/'.$buku->gambar)}}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body bg-secondary">



    <table class="lead table table-boderless text-light bg-secondary">
    <tbody>
      <tr>
        <th>Kode Buku</th>
        <td>{{ $buku->id }}</td>
      </tr>
      <tr>
        <th>Judul Buku</th>
        <td>{{ $buku->judul }}</td>
      </tr>
      <tr>
        <th>Pengarang Buku</th>
        <td>{{ $buku->pengarang }}</td>
      </tr>
      <tr>
        <th>Tahun Terbit</th>
        <td>{{ $buku->tahun_terbit }}</td>
      </tr>

      <tr>
        <th>Stok</th>
        <td>{{ $buku->stok }}</td>
      </tr>

        </tbody>
    </table>
          </div>
    </div>
  </div>
</div>
    <a href="{{url('pinjam/create')}}" class="btn btn-primary">Pinjam</a>
    <a href="{{url('buku')}}" class=" btn btn-warning">Kembali</a>


    </center>
  </div>
@stop