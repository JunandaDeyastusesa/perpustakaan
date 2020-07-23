@extends('template')

@section('main')
  <div id="pinjam" style="padding-left: 25%; padding-right: 25%;">

    <center>
    <h2 style="margin-top: 10%; margin-bottom: 3%;">Detail Peminjam</h2>

    <table class="lead table table-striped">
    <tbody>
      <tr>
        <th>Nama Peminjam</th>
        <td>{{! empty($pinjam->anggota->name) ? $pinjam->anggota->name : '-' }}</td>
      </tr>
      <tr>
        <th>Judul Buku</th>
        <td>{{! empty($pinjam->buku->judul) ? $pinjam->buku->judul : '-' }}</td>
      </tr>
      <tr>
        <th>Tanggal Pinjam</th>
        <td>{{ $pinjam->tgl_pinjam }}</td>
      </tr>
      <tr>
        <th>Tenggat</th>
        <td>{{! empty($pinjam->tgl_kembali) ? $pinjam->tgl_kembali : 'Belum Dikembalikan' }}</td>
      </tr>
      <tr>
        <th>Tanggal Kembali</th>
        <td>{{! empty($pinjam->status) ? $pinjam->status : 'Belum Dikembalikan' }}</td>
      </tr>

        </tbody>
    </table>
    

    <a href="{{url('pinjam')}}" class=" btn btn-warning">Kembali</a>
    <a href="{{ url('/pinjam/cetak_pdf/'. $pinjam->id) }}" class="btn btn-info">CETAK PDF</a>

    </center>
  </div>
@stop