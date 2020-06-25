@extends('layouts.app')
@section('title')
    Shtimi i perdoruesve
@endsection
@section('content')
<div class="container">

        <div class="col-12">

            <h5 class="text-center mt-6 mb-8">Shto Perdoruesin</h5>
            <form class="form-horizontal" method="post" action="/addUser_store" autocomplete="off">
                @csrf

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right" for="name">Emri</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm"  id="name" name="name" placeholder="Emri"
                               value="{{old('name')}}">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right" for="surname">Mbiemri</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm"  id="name" name="surname" placeholder="Mbiemri"
                               value="{{old('surname')}}">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right" for="email">Email-i</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control form-control-sm"  id="email" name="email" placeholder="Email" >
                        @error('email')
                        {{ $message }}
                        @enderror

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right" for="password">Password</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control form-control-sm" id="email"  id="password" name="password" required
                               autocomplete="new-password"
                               placeholder="Password" >
                        @error('password')
                        {{ $message }}
                        @enderror

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right" for="confirmpassword">Password</label>
                    <div class="col-md-8">
                        <input type="password" class="form-control form-control-sm"  id="confirmpassword"
                               name="confirmpassword"
                               required autocomplete="new-password" placeholder="Confirm Password" >
                        @error('confirmpassword')
                        {{ $message }}
                        @enderror

                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-2 col-form-label text-md-right"></label>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-success">Shto </button>
                    </div>
                </div>

            </form>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <a class="btn btn-primary" href="/administrimi">Kthehu</a>
                </div>
            </div>
        </div>


@endsection
