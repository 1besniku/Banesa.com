@extends('layouts.app')
@section('title')
    Llogaria
@endsection
@section('content')
    <div class="container">
        @if (session('status'))

            <div class="alert alert-success">
                <p class="font-bold">Informacion</p>
                <p> {{ session('status') }}</p>
            </div>
        @endif
        <p>
            Ne llogarin tuaj keni shpalljet qe ju keni postuar ne <b>Banesa.com</b>. Ne llogarin tuaj mund ti fshini ose
            shikoni shpalljet tuaja.
        </p>
        <h6 class="text-center mt-5 mb-4">Shpalljet qe keni postuar</h6>
        <table class="table table-striped mt-6 mb-8">
            <thead>
            <tr>
                <th scope="col">Shpalljet</th>
                <th scope="col">Fshi Shpalljet</th>

            </tr>
            </thead>
            <tbody>
            @foreach($shpalljet as $name)
                <tr>
                    <th scope="row"><a href="/shpalljet/{{$name->id}}">{{$name->kategoria}}</a></th>
                    <td>
                        <form action="/aprovim/delete/{{$name->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Fshi
                                Shpalljen
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
