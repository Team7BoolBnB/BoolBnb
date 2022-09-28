@extends('layouts.welcome')

@section('page-title', 'Reset password')

@section('content')
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body p-5">
                    <div class="text-center">
                        <h2>Reset your password</h2>
                    </div>
                    <div class="pt-5">

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email"><h6>{{ __('E-Mail Address') }}</h6></label>
    
                                <div class="pb-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password"><h6>{{ __('Password') }}</h6></label>
    
                                <div class="pb-4">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm"><h6>{{ __('Confirm Password') }}</h6></label>
    
                                <div class="pb-4">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2 d-flex justify-content-center">
                                    <button type="submit" class="basicBtn bigBtn primaryBtn">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="pt-5 text-center">
                        <hr>
                        <div class="pt-3">
                            <a href="/login" class="textLink text-decoration-none">
                                <i class="fa-solid fa-arrow-left pe-2"></i>
                                Back to login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
