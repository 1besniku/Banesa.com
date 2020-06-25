@extends('layouts.app')
@section('title')
    Aprovimi
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Objekti</th>
                <th scope="col">Statusi i Aprovimit</th>
                <th scope="col">Data</th>
                <th scope="col">Detaje</th>
                <th scope="col">Aprovo</th>
                <th scope="col">Fshi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($array_shpalljet as $prop)

                <th scope="row">{{$prop->kategoria}}</th>
                @if($prop->is_aproved == 1)
                    <th> I Aprovuar</th>
                @else
                    <th>I pa Aprovuar</th>
                @endif
                <td>{{$prop->created_at}}</td>
                <td><a href="/shpalljet/{{$prop->id}}" class="btn btn-primary">Detajet</a></td>


                <td>
                    <form method="post" action="/aprovim-update/{{$prop->id}} ">
                        @csrf
                        <input type="hidden" value="1" id="app" name="app">
                        <button class="btn btn-success">Aprovo</button>
                    </form>
                </td>
                <td>
                    <form class="form-horizontal" method="post" action="/aprovim/delete/{{$prop->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Fshi</button>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $array_shpalljet->links() }}
@endsection


