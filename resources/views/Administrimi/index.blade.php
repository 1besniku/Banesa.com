@extends('layouts.app')
@section('title')
    Administrimi
@endsection
@section('content')
    <div class="container">
        <h2 class="text-center mb-6 mt-5">Administrimi</h2>
        <form method="post" action="/user/search" autocomplete="off">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Emri</label>
                    <input type="text" class="form-control" placeholder="Emri" id="name" name="name">
                    @error('name')
                    Ju lutem shkruani Emrin!
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="surname">Mbiemri</label>
                    <input type="text" class="form-control" id="surname" name="surname" placeholder="Mbiemri">
                    @error('surname')
                    Ju lutem shkruani Mbiemrin!
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Kerko</button>
        </form>
        <div class="row mt-5">
            <div class="col-sm-12">
                <a href="/addUser" id="button" >Shto Perdoruesit</a>
            </div>
        </div>


        <h1 class="text-center mt-5 mb-6">Adminstratort</h1>


      <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Emri</th>
                <th scope="col">Mbiemri</th>
                <th scope="col">Email-i</th>
                <th scope="col">Edito</th>
                <th scope="col">Fshi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($useradmin as $useradmin)
                <tr>
                    <th> {{$useradmin['name']}}</th>
                    <td>{{$useradmin['surname']}}</td>
                    <td>{{$useradmin['email']}}</td>
                    <td><a  class="btn btn-info" href="edit/{{$useradmin['id']}}">Edito</a></td>
                    <td>  <form action="/user/delete/{{$useradmin['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Fshi
                            </button>
                        </form></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h4 class="text-center mt-6 mb-8">Perdoruesit</h4>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Emri</th>
                <th scope="col">Mbiemri</th>
                <th scope="col">Email-i</th>
                <th scope="col">Edito</th>
                <th scope="col">Fshi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $user)
                <tr>
                    <th> {{$user['name']}}</th>
                    <th> {{$user['surname']}}</th>
                    <td>{{$user['email']}}</td>
                    <td><a  class="btn btn-info" href="edit/{{$user['id']}}">Edito</a></td>
                    <td>    <form action="/user/delete/{{$useradmin['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Fshi
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
