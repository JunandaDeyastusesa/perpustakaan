@extends('template')

@section('main')

<div id="buku" enctype="multipart/form-data">

    <h1 class="col mb-5" style="padding-left: 43%; padding-top: 3%;  font-family: serif;">Pinjam Buku</h1>

            <form action="{{url('buku/cari')}}" class=" container form-inline my-2 my-lg-0" style="padding-left: 35%;" method="GET" style="padding-bottom: 5%; padding-top: -10%;">

        <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" value="{{old('cari')}}" aria-label="Search">
        <input type="submit" value="cari" class="btn btn-primary">
<!--         <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button> -->
    </form>

<center>
    <div class="container" style="margin-top: 3%;">
        <div class="row">
        @foreach($buku_list as $buku)
        @if($buku->stok != 0)

          <div style="margin-right:20px; margin-bottom: 20px">
            <a href="{{url('buku/'.$buku->id)}}">
            <img src="{{asset('img/'.$buku->gambar)}}" style="width: 180px; height: 200px;" class="card-img-top" alt="..."></a>
                <div class="card-body ">

                    <h6 class="card-text ">{{ $buku->judul }}</h6>
                    <p>Stok : {{ $buku->stok }}<br>
                    Genre : {{ $buku->genre }}</p>
                    </div>
                </div>
                @endif
                @endforeach   
            </div>
        </div>
    </div>
</center>
    
@stop

@section('footer')

    <div id="footer">
    <br>
    <br>
    <p><center>&copy;2019 Belajar_Laravel</center></p>
    </div>
@stop
