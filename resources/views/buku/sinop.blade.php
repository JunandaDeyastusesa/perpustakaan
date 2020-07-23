@extends('template')

@section('main')
  <div id="buku">


    <center>
    <h2>Detail Buku</h2>

<div class="card mb-3 " style="max-width: 600px;">
  <div class="row no-gutters">
    <div class="col-md-4 bg-dark">
      <img style="padding-top: 5%; width: 95%" src="{{asset('images/'.$buku->gambar)}}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body bg-secondary">



    <table class="lead table table-boderless text-light bg-secondary">
    <tbody>
      <tr>
        <th>Sinopsis</th>
        <td>{{ $buku->sinop }}</td>
      </tr>

        </tbody>
    </table>
          </div>
    </div>
  </div>
</div>
    <a href="{{url('buku')}}" class=" btn btn-warning">Kembali</a>

    </center>
  </div>
@stop