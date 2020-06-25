@extends('layouts.app')
@section('title')
    Rezultati
@endsection
@section('content')

    <div class="card-body">
        <div class="row">

            <div class="col-mb-8 col-lg-8 col-sm-12">
                <div class="col-md-12">
                    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                        <!-- slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img
                                    src="/images/{{$array_shpalljet->fotos['0']->foto_emri}}"
                                    alt="Hills"></div>
                            @for($i = 1; $i < count($array_shpalljet->fotos ); $i++)

                                <div class="carousel-item"><img src="/images/{{$array_shpalljet->fotos[$i]->foto_emri}}"
                                                                alt="Hills"></div>
                            @endfor

                        </div> <!-- Left right -->

                        <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                            <span class="carousel-control-prev-icon" id="prev"></span>
                        </a>
                        <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                            <span class="carousel-control-next-icon" id="next"></span>
                        </a>
                        <!-- Thumbnails -->
                        <ol class="carousel-indicators list-inline mb-4">
                            <li class="list-inline-item"><a id="carousel-selector-0" data-slide-to="0"
                                                            data-target="#custCarousel"> <img
                                        src="/images/{{$array_shpalljet->fotos['0']->foto_emri}}"
                                        class="img-fluid"> </a>
                            </li>
                            @for($i = 1; $i < count($array_shpalljet->fotos ); $i++)

                                <li class="list-inline-item">
                                    <a id="carousel-selector-{{$i}}" data-slide-to="{{$i}}"
                                       data-target="#custCarousel"> <img
                                            src="/thumbnail/{{$array_shpalljet->fotos[$i]->foto_emri}}"
                                            class="img-fluid">
                                    </a>
                                </li>
                            @endfor
                        </ol>

                    </div>
                </div>
            </div>
            <div class="col-mb-4 col-lg-4 col-sm-12 mt-2 ">

                <h6>Kontakti</h6>
                <p class="mt-1"><b>Emri:</b> {{$array_shpalljet->emri}}</p>
                <p><b>Mbiemri:</b> {{$array_shpalljet->mbiemri}}</p>
                <p><b>Numri Telefonit:</b> {{$array_shpalljet->nr_tel}}</p>

            </div>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4 col-lg-4 col-sm-12">
            <h6><i class="fas fa-home"></i> Objekti</h6>
            <p class="ml-4">{{$array_shpalljet->kategoria}}</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <h6><i class="fas fa-home"></i> Lloji Shpalljes</h6>
            <p class="ml-4">{{$array_shpalljet->llojishpalljes}}</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <h6><i class="fab fa-500px"></i> Siperfaqja</h6>
            <p class="ml-4">{{$array_shpalljet->siperfaqja}}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4 col-lg-4 col-sm-12">
            <h6><i class="fas fa-map-marked-alt"></i> Adresa</h6>
            <p class="ml-4">{{$array_shpalljet->adresa}}</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <h6><i class="fas fa-archway"></i> Komuna</h6>
            <p class="ml-4">{{$array_shpalljet->komuna}}</p>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <h6><i class="fas fa-tags"></i> Qmimi</h6>
            <p class="ml-4">{{$array_shpalljet->qmimi}}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
                <b>Per Vendbani posedon:</b>
                <p>
                    @if($array_shpalljet->garazhda != null){{$array_shpalljet->garazhda}},@endif
                    @if($array_shpalljet->soba_oxhak != null),{{$array_shpalljet->soba_oxhak}}@endif
                    @if($array_shpalljet->shtepi_re != null),{{$array_shpalljet->shtepi_re}}@endif
                    @if($array_shpalljet->shtepi_vequar != null), {{$array_shpalljet->shtepi_vequar}}@endif
                    @if($array_shpalljet->rinovuar != null), {{$array_shpalljet->rinovuar}}@endif
                    @if($array_shpalljet->mobiluar != null), {{$array_shpalljet->mobiluar}}@endif
                    @if($array_shpalljet->uji != null), {{$array_shpalljet->uji}}@endif
                    @if($array_shpalljet->ballkon != null), {{$array_shpalljet->ballkon}}@endif
                    @if($array_shpalljet->energji_elektrike != null), {{$array_shpalljet->energji_elektrike}}@endif
                    @if($array_shpalljet->ndertes_montuse != null), {{$array_shpalljet->ndertes_montuse}}@endif
                    @if($array_shpalljet->ndertes_ngurt != null){{$array_shpalljet->ndertes_ngurt}},@endif
                    @if($array_shpalljet->ndertes_nentoksore != null), {{$array_shpalljet->ndertes_nentoksore}}@endif
                    @if($array_shpalljet->kat_cati != null), {{$array_shpalljet->kat_cati}}@endif
                    @if($array_shpalljet->ashensor != null), {{$array_shpalljet->ashensor}}@endif
                    @if($array_shpalljet->interfon != null), {{$array_shpalljet->interfon}}@endif
                    @if($array_shpalljet->bodrum != null), {{$array_shpalljet->bodrum}}@endif
                    @if($array_shpalljet->dublex != null), {{$array_shpalljet->dublex}}@endif
                    @if($array_shpalljet->siperfaqe_ujore != null), {{$array_shpalljet->siperfaqe_ujore}}@endif
                    @if($array_shpalljet->pyll != null),{{$array_shpalljet->pyll}}@endif
                    @if($array_shpalljet->vend_peshkim != null), {{$array_shpalljet->vend_peshkim}}@endif
                    @if($array_shpalljet->vend_skijim != null), {{$array_shpalljet->vend_skijim}}@endif
                    @if($array_shpalljet->tok != null),{{$array_shpalljet->tok}}@endif
                    @if($array_shpalljet->fush != null), {{$array_shpalljet->fush}}@endif
                    @if($array_shpalljet->asfalt != null), {{$array_shpalljet->asfalt}}@endif
                    @if($array_shpalljet->leje_ndertimi != null), {{$array_shpalljet->leje_ndertimi}}@endif.
                </p>
        </div>
        <div class="row mt-3">
            <div class="col-12 ml-3">
                <b>Komenti:</b>
                <p>
                   {{$array_shpalljet->komenti }}
                </p>
            </div>
    </div>


@endsection
