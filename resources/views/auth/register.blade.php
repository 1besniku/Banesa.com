@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Regjistrohu</h5>
                        <form class="form-signin"  method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-label-group">
                                <input type="text" id="name"
                                       class="form-control @error('name') is-invalid @enderror " name='name'
                                       value="{{ old('name')}}" required autocomplete="name" autofocus
                                       placeholder="Emri"/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                @enderror
                                <label for="inputEmail">Emri</label>
                            </div>
                            <div class="form-label-group">
                                <input type="text"  class="form-control @error('surname') is-invalid @enderror " name ='surname' value="{{ old('surname')}}" required autocomplete="surname" autofocus
                                       placeholder="Mbiemri" />
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="surname">Mbiemri</label>
                            </div>
                            <div class="form-label-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email"
                                       name="email"
                                       id="email"
                                       placeholder="Email-i">
                                <label for="email">Email-l</label>
                                @error('email')
                                Ky emaik tashme eshte i perdorur, Perdorni nje tjeter.
                                @enderror

                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       id="password"
                                       required autocomplete="new-password"
                                       placeholder="Password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                @enderror
                                <label for="password">Password-i</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password"  class="form-control" name="password_confirmation" required autocomplete="new-password"
                                       id="password-confirm"
                                       placeholder="Konfrmimi i Passwordit">
                                <label for="password-confirm">Konfirmo Password-in</label>
                            </div>


                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Reghistrohu</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
