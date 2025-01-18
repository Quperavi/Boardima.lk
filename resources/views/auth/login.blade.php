@extends('layouts.auth')

@section('content')

<div class="container container-register"  style="padding: 90px">
    <div class="col-md-12 row justify-content-center w-100 g-0 registration-main">

        <div class="col-md-5 image-login-cover border-main-login-2">
            {{-- <img class="bi my-3" src={{ asset('assest/img/register.jpg') }}> --}}
        </div>
        <div class="col-md-5">
            <div class="card no-radius border-main-login-1">
                <div class="card-body rounded-2">
                <div class="w-100 d-flex justify-content-center my-3">
                <img class="bi my-3" height="15%" width="15%" src={{ asset('assest/img/hd.png') }}>
                </div>

                    <form method="POST" action="{{route('user_login')}}" >
                        @csrf

                        <div class="row mb-3 my-3">
                            <h1 class=" col-md-8 offset-md-4">Welcome Back :)</h1>
                        </div>


                        <div class="row mb-3 my-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end my-3">{{ __('Email Address') }}</label>

                            <div class="col-md-6 my-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 my-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                    <a class="btn btn-link">
                                        {{ __('Forgot Your Password?') }}
                                    </a>

                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <p class="col-md-8 offset-md-4">Or dont have an Account <a href="/register" class="btn btn-link">
                                {{ __('Create One!') }}
                            </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='https://unpkg.com/izitoast/dist/js/iziToast.min.js'></script>
@if($errors->any())
<script>
    // Display izitoast error message
    iziToast.error({
        title: 'Error',
        message: '{{ $errors->first() }}'
    });
</script>
@endif
@endsection
