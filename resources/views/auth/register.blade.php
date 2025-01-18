@extends('layouts.auth')

@section('content')
<div class="container container-register">
    <div class="col-md-12 row justify-content-center w-100 g-0 registration-main">
        <div class="col-md-5" >
            <div class="card no-radius border-main-1" >
                <div class="card-body" >
                <div class="w-100 d-flex justify-content-center my-3">
                <img class="bi my-3" height="15%" width="15%" src={{ asset('assest/img/hd.png') }}>
                </div>
                    <form action="{{route('user_register')}}" method="POST">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user fa-2x"></i></span>
                                </div>
                                <input id="name" placeholder="Enter Name *" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope fa-2x"></i></span>
                                </div>
                                <input id="email" placeholder="Enter email *" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-house fa-2x"></i></span>
                                </div>
                                <input id="address" placeholder="Enter address *" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone fa-2x"></i></span>
                                </div>
                                <input id="phone_number" placeholder="Enter phone number *" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-square-whatsapp fa-2x"></i></span>
                                </div>
                                <input id="whatsapp_number" placeholder="Enter whatsapp number *" type="text" class="form-control @error('whatsapp_number') is-invalid @enderror" name="whatsapp_number" value="{{ old('whatsapp_number') }}" required autocomplete="whatsapp_number" autofocus>
                                @error('whatsapp_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-facebook fa-2x"></i></span>
                                </div>
                                <input id="facebook" placeholder="Enter Facebook Link " type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}"  autocomplete="facebook" autofocus>
                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock fa-2x"></i></span>
                                </div>
                                <input placeholder="Enter Password *" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole fa-2x"></i></span>
                                </div>
                                 <input placeholder="Confirm Password *" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                 @error('password_confirmation')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <button style="background-color:#3e4684" type="submit" class="btn btn-primary w-100">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5 image-cover border-main-2">
            {{-- <img class="bi my-3" src={{ asset('assest/img/register.jpg') }}> --}}
        </div>
    </div>
</div>
@endsection
