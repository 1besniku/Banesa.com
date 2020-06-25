@extends('layouts.app')
@section('title')
   Rezultati i Kerkimit
@endsection
@section('content')

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Emri dhe mbiemri</th>
            <th scope="col">Email-i</th>
            <th scope="col">Status i Adminit</th>
            <th scope="col">Edito</th>
            <th scope="col">Fshi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kerko as $kerko)
            <tr>
                <th scope="row">{{$kerko['name']}} {{$kerko['surname']}}</th>
                <td>{{$kerko['email']}}</td>
                @if($kerko['is_admin'] == 1)
                    <td>Admin</td>
                @else
                    <td>Perdorues i thjesht</td>
                @endif


                <td><a href="/edit/{{$kerko['id']}}" class="btn btn-primary">Edito</a></td>
                <td>
                    <form action="/user/delete/{{$kerko['id']}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Fshi</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="row">

        <div class="col-12">
            <a class="btn btn-primary" href="/administrimi">Kthehu</a>
        </div>
    </div>

@endsection
