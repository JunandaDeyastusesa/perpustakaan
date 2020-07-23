@extends('template')

@section('main')
<div class="text-center" id="anggota">


    <h1 style="margin-top: 2%; margin-bottom: 3%">Anggota </h1>

    <div class="container mr-sm-9" style="margin-left: 40%; margin-bottom: 2%">
    <form action="{{url('anggota/cari')}}" class="form-inline my-2 my-lg-9" method="GET">

        <input class="form-control mr-sm-3" type="search" name="cari" placeholder="Search" value="{{old('cari')}}" aria-label="Search">
        <input type="submit" value="cari" class="btn btn-primary">
<!--         <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button> -->
    </form>
    </div>

    @if (!empty($anggota_list))
    <div class="container">
        <table class="table table-bordered">
        <thead>
        <tr class="bg-dark text-light">
        <th>ID Anggota</th>
        <th>Nama</th>
        <th>Jurusan </th>
        <th>Kelas</th>
        <th>Level</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($anggota_list as $anggota)
        <tr class="bg-secondary">
        <td class="text-light">{{ $anggota->id }}</td>
        <td class="text-light">{{ $anggota->name }}</td>
        <td class="text-light">{{ $anggota->jurusan}}</td>
        <td class="text-light">{{ $anggota->kelas}}</td>

        <td class="text-light">@if($anggota->role == 1) Admin
                                @else Member @endif</td>

        <td><a class="btn btn-outline-light btn-sm" href="{{url('anggota/'.$anggota->id)}}">Detail</a>
        <a class="btn btn-outline-warning btn-sm" href="{{url('anggota/delete/'.$anggota->id)}}">Delete</a></td>
    
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
