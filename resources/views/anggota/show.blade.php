@extends('template')

@section('main')
  <div id="anggota">

    <center>
    <h2 style="padding-top: 4%; padding-bottom: 0,5%">Detail </h2>
    <hr width="20%" align="center" color="black" style="padding-bottom: 0.2%">

    <div style="max-width: 400px; padding-top: 1%">
    <table class="lead table table-strip bg-secondary text-light">
    <tbody>
      <tr>
        <th>ID</th>
        <td>{{ $anggota->id }}</td>
      </tr>
      <tr>
        <th>Nama</th>
        <td>{{ $anggota->name }}</td>
      </tr>
      <tr>
        <th>Jurusan</th>
        <td>{{ $anggota->jurusan }}</td>
      </tr>
      <tr>
        <th>Kelas</th>
        <td>{{ $anggota->kelas }}</td>
      </tr>


        </tbody>
    </table>
    </div>

    <a href="{{url('anggota')}}" class=" btn btn-outline-info">Kembali</a>
    </center>
  </div>
@stop