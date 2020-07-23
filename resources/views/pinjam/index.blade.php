@extends('template')

@section('main')
<div class="text-center" style="margin-top: 2%;" id="pinjam">


    <h1>Data Pinjam</h1>

    @if (!empty($pinjam_list))
        <table class="table">
        <thead>
        <tr>
        <th>ID Anggota</th>
        <th>Kode Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tenggat</th>
        <th>Tanggal Kembali</th>
        <th>Denda</th>
        <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pinjam_list as $pinjam)
        <tr>
        <td>{{ $pinjam->id }}</td>
        <td>{{ $pinjam->kode_buku }}</td>
        <td>{{ $pinjam->tgl_pinjam }}</td>
        <td>{{ $pinjam->tgl_kembali}}</td>
        <td>{{ ! empty($pinjam->status) ? $pinjam->status : 'Belum Kembali' }}</td>
        <td>{{ $pinjam->denda }}</td>
        
        <td>
        @if($pinjam->status == null)
        <a href="{{url('pinjam/edit/'.$pinjam->id)}}" class=" btn btn-secondary btn-sm">Kembalikan</a>
        @endif
        <a class="btn btn-success btn-sm" href="{{url('pinjam/'.$pinjam->id)}}">Detail</a>
        <a class="btn btn-danger btn-sm" href="{{url('pinjam/delete/'.$pinjam->id)}}">Delete</a></td>
    
        </tr>
        @endforeach
        </tbody>
        </table>


    @else
    <p>Tidak ada data buku.</p>
    @endif
</div>
@stop

@section('footer')

    <div id="footer">
    <br>
    <br>
    <p><center>&copy;2019 Belajar_Laravel</center></p>
    </div>
@stop
