@extends('template')

@section('main')
<div class="container" style="margin-top: 1%; margin-left: -10%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card"> -->
              <!--   <div class="card-header">{{ __('Register') }}</div> -->

                <div class="card-body">
                     <a><img src="{{asset('img/oke.png')}}" height="370" width="420" style="margin-bottom: -50%; margin-left: 90%;" alt="" title="" /></a>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-9 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-9 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-9 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-9 col-form-label text-md-left">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group" >
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control col-md-6" name="jurusan" id="exampleFormControlSelect1">
                              <option class="form-check-label" value="RPL" >Rekayasa Perangkat Lunak</option>
                              <option class="form-check-label" value="TKJ" >Teknik Komputer dan Jaringan</option>
                            </select>
                          </div>

                        <div class="form-group">
                            <label for="role">Level</label>
                            <select class="form-control col-md-6" name="role" id="exampleFormControlSelect1">
                              <option class="form-check-label" value="1" >Admin</option>
                              <option class="form-check-label" value="2" >Member</option>
                            </select>
                          </div>

                        <div class="form-group">
                            <label for="kelas" class="control-label">Kelas</label>
                            <input name="kelas" type="int" class="form-control col-md-6">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
   <!--          </div> -->
        </div>
    </div>
</div>
@endsection
