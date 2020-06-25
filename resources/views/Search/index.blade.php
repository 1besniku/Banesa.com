@extends('layouts.app')
@section('content')
        <a href="/" class="btn btn-danger">Kthehu ne fillim</a>
    <div class="card-body bg-white mt-5">
        @foreach($search as $arr)
            <div class="row">
                <div class="col-4">
                    <a href="/shpalljet/{{$arr->slug}}">
                        <img class="ml-5 mt-3" src="/thumbnail/{{$arr->fotos[0]->foto_emri}}" alt="fotos">
                    </a>
                </div>
                <div class="col-5 mt-3 d-flex flex-column justify-content-between">
                    <div>
                        <h5>{{$arr->kategoria}}</h5>
                        <p>{{$arr->titulli}}</p>
                    </div>
                    <a href="/shpalljet/{{$arr->slug}}"><i class="fas fa-arrow-alt-circle-right"></i>Me detaisht</a>
                </div>
                <div class="col-3">
                    <b>Postuar:</b> {{$arr->created_at}}
                </div>
            </div>

            <hr style="width:100%;text-align:left;margin-left:0">
        @endforeach
        {{ $search->links() }}
    </div>

@endsection
