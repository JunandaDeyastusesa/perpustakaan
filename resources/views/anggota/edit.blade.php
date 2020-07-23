@extends('template')

@section('main')
<div id="anggota">
    <h2>Edit Anggota</h2>

    <form action="{{url('anggota/'.$anggota->id.'/update') }}" method="post">
    @csrf
    <div class="form-group">
    <label for="id_anggota" class="control-label">ID</label>
    <input name="id_anggota" type="text" class="form-control" value="{{$siswa->nisn}}">
    </div>

    <div class="form-group">
        <label for="nama" class="control-label ">Nama</label>
        <input name="nama" type="text" class="form-control" value="{{$siswa->nama}}">
    </div>


    <div class="form-group">
        <label for="jenis_kelamin" class="control-label ">Jurusan</label>
        @if($siswa->jurusan=="P")
        <div class="form-check"></div>
        <input class="form-check-input" type="radio" name="jurusan" id="jurusan" value="rpl" checked>
        <label class="form-check-label" for="jurusan">Rekayasa Perangkat Lunak</label>
    </div>

    <div class="form-check">
        <label for="jenis_kelamin" class="control-label ">Jurusan</label>
        @if($siswa->jurusan=="L")
        <div class="form-check"></div>
        <input class="form-check-input" type="radio" name="jurusan" id="jurusan" value="tkj" checked>
        <label class="form-check-label" for="jurusan">Teknik Komputer dan Jaringan</label>
        </label>
    </div>

     <div class="form-group">
        <label for="kelas" class="control-label ">Kelas</label>
        <input name="kelas" type="text" class="form-control" value="{{$siswa->kelas}}">
    </div>
    @endif

    <div class="form-group">
        <label for="image" class="control-label"></label>
        <input name="image" type="file" class="form-control">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop