@extends('template')
@section('main')
<div class="text-center" id="buku">
    <h1 style ="padding-bottom:20px; padding-top: 20px">Data Buku</h1>

    @if (!empty($buku_list))
        <div class="container">
        <table class="table table-bordered">
        <thead>
        <tr class="bg-dark text-light ">
        <th>KODE BUKU</th>
        <th>JUDUL BUKU</th>
        <th>PENGARANG</th>
        <th>TAHUN TERBIT</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody class="bg-secondary text-light">
        @foreach($buku_list as $buku)
        <tr>
        <td>{{ $buku->id }}</td>
        <td>{{ $buku->judul }}</td>
        <td>{{ $buku->pengarang }}</td>
        <td>{{ $buku->tahun_terbit }}</td>
        <td><a class="btn btn-success btn-sm" href="{{url('buku/'.$buku->id)}}">Detail</a>
        <a class="btn btn-warning btn-sm" href="{{url('buku/edit/'.$buku->id)}}">Edit</a>
        <a class="btn btn-danger btn-sm" href="{{url('buku/delete/'.$buku->id)}}">Delete</a></td>
    
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
        <a href="{{ url('buku/create')}}" class="btn btn-primary">Tambah Buku</a>


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
