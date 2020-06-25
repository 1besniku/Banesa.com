@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-6 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kyqu</h5>
                        <form class="form-signin" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-label-group">
                                <input type="email"  class="form-control  @error('email') is-invalid @enderror"
                                       name="email"
                                       id="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus
                                       placeholder="Email">
                                <label for="email">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                       name="password"
                                       required autocomplete="current-password" id ='password'
                                       placeholder="Password">
                                <label for="password">Password</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Hyr</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <hr class="my-4">
                            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Kyqu me Google</button>
                            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Kyqu me Facebook</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- <div class="row justify-content-center">
     <div class="col-md-8">
         <div class="card">
             <div class="card-header">{{ __('Login') }}</div>

             <div class="card-body">
                 <form method="POST" action="{{ route('login') }}">
                     @csrf

                     <div class="form-group row">
                         <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                         <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                         <div class="col-md-6">
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                             @error('password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>

                     <div class="form-group row">
                         <div class="col-md-6 offset-md-4">
                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                 <label class="form-check-label" for="remember">
                                     {{ __('Remember Me') }}
                                 </label>
                             </div>
                         </div>
                     </div>

                     <div class="form-group row mb-0">
                         <div class="col-md-8 offset-md-4">
                             <button type="submit" class="btn btn-primary">
                                 {{ __('Login') }}
                             </button>

                             @if (Route::has('password.request'))
                                 <a class="btn btn-link" href="{{ route('password.request') }}">
                                     {{ __('Forgot Your Password?') }}
                                 </a>
                             @endif
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
</div>--}}
@endsection
