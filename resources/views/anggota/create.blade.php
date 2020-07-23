@extends('template')

@section('main')

    <div id="anggota" class="container" style="padding-right: 30%; padding-left: 30%; margin-top: 5%;">
        <center><h2 style="margin-bottom: 5%;">Tambah Anggota</h2></center>

        <form action="{{ url('anggota') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name" class="control-label">Nama</label>
                <input name="name" type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="exampleFormControlSelect1">
                  <option class="form-check-label" value="RPL" >Rekayasa Perangkat Lunak</option>
                  <option class="form-check-label" value="TKJ" >Teknik Komputer dan Jaringan</option>
                </select>
              </div>

            <div class="form-group">
                <label for="kelas" class="control-label">Kelas</label>
                <input name="kelas" type="int" class="form-control">
            </div>
        </div>

        <center><button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
@stop
