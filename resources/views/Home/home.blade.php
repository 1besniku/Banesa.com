@extends('layouts.app')
@section('title')
    Ballina
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card-body bg-white">
        <form action="/search" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="form-group row ">
                        <label class="col-md-2 col-form-label text-md-right" for="objekti">Objekti</label>
                        <div class="col-md-12">
                            <select class="form-control  form-control-sm" name="objekti" id="objekti">
                                <option>Shtepi</option>
                                <option>Banes</option>
                                <option>Vill</option>
                                <option>Tok/Pllac</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right" for="llojishpalljes">Shpallja</label>
                        <div class="col-md-12">
                            <select class="form-control  form-control-sm" name="llojishpalljes" id="llojishpalljes">
                                <option>Shitet</option>
                                <option>Me Qera</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right" for="komuna">Komuna</label>
                        <div class="col-md-12">
                            <select type="text" class="form-control  form-control-sm" name="komuna" id="komuna">
                                <option>Zgjedh</option>
                                <option value="Prishtin">Prishtin</option>
                                <option value="Fushë Kosovë">Fushë Kosovë</option>
                                <option value="Pej">Pej</option>
                                <option value="Prizeren">Prizeren</option>
                                <option value="Obiliq">Obiliq</option>
                                <option value="Vushtrri">Vushtrri</option>
                                <option value="Mitrovic">Mitrovic</option>
                                <option value="Skenderaj">Skenderaj</option>
                                <option value="Gllogoc">Gllogoc</option>
                                <option value="Viti">Viti</option>
                                <option value="Ferizaj">Ferizaj</option>
                                <option value="Podujev">Podujev</option>
                                <option value="Rahovec">Rahovec</option>
                                <option value="Shtime">Shtime</option>
                                <option value="Malishevë">Malishevë</option>
                                <option value="Lipjan">Lipjan</option>
                                <option value="Kamenicë">Kamenicë</option>
                                <option value="Deçan">Deçan</option>
                                <option value="Kaçanik">Kaçanik</option>
                                <option value="Gjakovë">Gjakovë</option>
                                <option value="Gjilan">Gjilan</option>
                                <option value="Dragash">Dragash</option>
                                <option value="Istog">Istog</option>
                                <option value="Klinë">Klinë</option>
                                <option value="Junik">Junik</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right"></label>
                        <div class="col-md-12">
                            <button class="btn btn-info mt-3">Kerko</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body bg-white mt-5">
        @foreach($array_shpalljet as $arr)
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <a href="/shpalljet/{{$arr->slug}}">
                        <img class="ml-5 mt-3" src="/thumbnail/{{$arr->fotos[0]->foto_emri}}" alt="fotos">
                    </a>
                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 mt-3 d-flex flex-column justify-content-between">
                    <div>
                        <h5>{{$arr->kategoria}}</h5>
                        <p>{{$arr->titulli}}</p>
                    </div>
                    <a href="/shpalljet/{{$arr->slug}}"><i class="fas fa-arrow-alt-circle-right"></i>Me detaisht</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <b>Postuar:</b> {{$arr->created_at}}
                </div>
            </div>

            <hr style="width:100%;text-align:left;margin-left:0">
        @endforeach
        {{ $array_shpalljet->links() }}
    </div>



@endsection
