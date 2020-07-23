@extends('template')

@section('main')
<head>
    <body>
        

<div class="container" style="margin-top: 3%; margin-left: -8%;">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <!-- <div class="card-header">{{ __('Login') }}</div> -->
                <div id="logo">
              <a><img src="{{asset('img/oke.png')}}" height="370" width="420" style="margin-bottom: -37%; margin-left: 90%;" alt="" title="" /></a>
            </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-8 col-form-label text-md-left">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-8 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--                         <div class="form-group row">
                            <div class="col-md-6 offset-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>


        </div>
    </div>
</div>
    </body>
</head>
@endsection
