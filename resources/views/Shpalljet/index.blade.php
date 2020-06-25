@extends('layouts.app')
@section('title')
    Post Shpalljet
    @endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
            xmlns="http://www.w3.org/1999/html"></script>
    <script>
        $(document).ready(function () {
            $("select").change(function () {
                $(this).find("option:selected").each(function () {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".box").hide();
                    }
                });
            }).change();
        });

    </script>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right"></label>
        <div class="col-md-5">
            <h6 class="ml-5">Shto Shpalljet</h6>

        </div>
    </div>
    <form class="form-group mt-5" method="post" action="/pronat-store" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="emri">Emri</label>
            <div class="col-md-5">
                <input type="text" class="form-control  form-control-sm" name="emri" id="emri">
                @error('emri')
                {{$message}}
                @enderror

            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="mbiemri">Mbiemri</label>
            <div class="col-md-5">
                <input type="text" class="form-control  form-control-sm" name="mbiemri" id="mbiemri">
                @error('mbiemri')
                {{$message}}
                @enderror

            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="email">Email</label>
            <div class="col-md-5">
                <input type="email" class="form-control  form-control-sm" name="email" id="email">
                @error('email')
                {{$message}}
                @enderror

            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="numri_tel">Numri i Telefonit</label>
            <div class="col-md-5">
                <input type="text" class="form-control  form-control-sm" name="numri_tel" id="numri_tel">
                @error('numri_tel')
                {{$message}}
                @enderror

            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="kategoria"> Kategoria</label>
            <div class="col-md-5">
                <select class="form-control form-control-sm" id="kategoria" name="kategoria">
                    <option  selected>Zgjedh Kategorin</option>
                    <option value="shtepia">Shtepi</option>
                    <option value="banesa">Banes</option>
                    <option value="villa">Villa</option>
                    <option value="tok">Tok/Pllac</option>
                </select>
                <div id="show_shtepi">
                    {{--Shtepi--}}
                    <div class="shtepia box row mt-3">
                        <div class="col-6">
                            <input type="radio" id="shitet" name="kat" value="shitet"><label class="ml-2" for="shitet">Shitet</label><br>
                            <input type="radio" id="blehet" name="kat" value="blehet"><label class="ml-2" for="blehet">Blehet</label><br>
                        </div>
                        <div class="col-6"><input type="radio" id="meQera" name="kat" value="Jepet me qera"><label
                                class="ml-2"
                                for="meQera">Jepet
                                me qera</label><br>
                            <input type="radio" id="KërkohetMeqera" name="kat" value="Kërkohet me qera"><label
                                class="ml-2" for="KërkohetMeqera">Kërkohet
                                me qera</label><br>
                        </div>
                    </div>
                    <div class=" shtepia box  row mt-3">
                        <span class="ml-3 mb-1"><b>Per Vendbanim:</b></span>
                        <div class="col-12"><input type="checkbox" id="Garazhd" name="garazhd" value="Garazhd"> <label
                                class="ml-1">Garazhd</label></div>
                        <div class="col-12"><input type="checkbox" id="sob" name="sob" value="Sob/Oxhak"><label
                                class="ml-1">Sob/Oxhak</label></div>
                        <div class="col-12"><input type="checkbox" id="ndertes_re" name="ndertes_ere"
                                                  value="Ndertes e re"><label class="ml-1">Ndertes e re</label></div>
                    </div>
                    <div class=" shtepia box row ">
                        <div class="col-12"><input type="checkbox" id="shtepi_vequar" name="shtepi_vequar"
                                                  value="Shtepi e vequar"><label class="ml-1">Shtepi e vequar</label>
                        </div>
                        <div class="col-12"><input type="checkbox" id="rinovuar" name="rinovuar" value="Rinovuar"><label
                                class="ml-1">Rinovuar</label></div>
                        <div class="col-12"><input type="checkbox" id="mobiluar" name="mobiluar" value="Mobiluar"><label
                                class="ml-1">Mobiluar</label></div>
                    </div>
                </div>
                {{--Banesa--}}
                <div class="banesa box row mt-3">
                    <div class="col-6"><input type="radio" id="shitet" name="kat" value="shitet"><label class="ml-2"
                                                                                                        for="shitet">Shitet</label><br>
                        <input type="radio" id="blehet" name="kat" value="blehet"><label class="ml-2" for="blehet">Blehet</label><br>
                    </div>
                    <div class="col-6"><input type="radio" id="meQera" name="kat" value="Jepet me qera"><label
                            class="ml-2"
                            for="blehet">Jepet
                            me qera</label><br>
                        <input type="radio" id="KërkohetMeqera" name="kat" value="Kërkohet me qera"><label
                            class="ml-2" for="blehet">Kërkohet
                            me qera</label><br>
                    </div>
                </div>
                <div class=" banesa box  row mt-3">
                    <span class="ml-3 mb-1"><b>Per Vendbanim:</b></span>
                    <div class="col-12"><input type="checkbox" id="ballkon" name="ballkon" value="Ballkon"> <label
                            class="ml-1">Ballkon/Teract</label></div>
                    <div class="col-12"><input type="checkbox" id="sob" name="sob" value="Sob/Oxhak"><label
                            class="ml-1">Sob/Oxhak</label></div>
                    <div class="col-12"><input type="checkbox" id="ndertes_re" name="ndertes_ere"
                                              value="Ndertes e re"><label class="ml-1">Ndertes e re</label></div>
                </div>
                <div class=" banesa box row ">
                    <div class="col-12"><input type="checkbox" id="garazhd" name="garazhd"
                                              value="gazarzhd"><label class="ml-1">Garazh/Parking</label>
                    </div>
                    <div class="col-12"><input type="checkbox" id="rinovuar" name="rinovuar" value="Rinovuar"><label
                            class="ml-1">Rinovuar</label></div>
                    <div class="col-12"><input type="checkbox" id="mobiluar" name="mobiluar" value="Mobiluar"><label
                            class="ml-1">E Mobiluar</label></div>
                </div>
                <div class=" banesa box row ">
                    <div class="col-12"><input type="checkbox" id="kat_qati" name="kat_qati"
                                              value="Kat ne qati"><label class="ml-1">Kat ne Cati</label>
                    </div>
                    <div class="col-12"><input type="checkbox" id="ashensor" name="ashensor" value="Ashensor"><label
                            class="ml-1">Ashensor</label></div>
                    <div class="col-12"><input type="checkbox" id="bodru" name="bodru" value="Bodrum"><label
                            class="ml-1">Bodrum</label></div>
                </div>
                <div class=" banesa box row ">
                    <div class="col-12"><input type="checkbox" id="interfon" name="interfon"
                                              value="Interfon"><label class="ml-1">Interfon</label>
                    </div>
                    <div class="col-12"><input type="checkbox" id="dublex" name="dublex" value="Dublex"><label
                            class="ml-1">Dublex</label></div>

                </div>
                {{--Villa--}}
                <div class="villa box row mt-3">
                    <div class="col-8"><input type="radio" id="shitet" name="kat" value="shitet"><label class="ml-2"
                                                                                                        for="shitet">Shitet</label><br>
                        <input type="radio" id="blehet" name="kat" value="blehet"><label class="ml-2" for="blehet">Blehet</label><br>
                    </div>
                    <div class="col-8">
                        <input type="radio" id="meQera" name="kat" value="Jepet me qera"><label
                            class="ml-2"
                            for="blehet">Jepet
                            me qera</label><br>
                        <input type="radio" id="KërkohetMeqera" name="kat" value="Kërkohet me qera"><label
                            class="ml-2" for="blehet">Kërkohet
                            me qera</label><br>
                    </div>
                    <div class="row ml-1">
                        <span class="ml-3 mb-1"><b>Per Vendbanim:</b></span>
                        <div class="col-12"><input type="checkbox" name="sip_ujore" id="sip_ujore"
                                                   value="Siperfaqe Ujore"><label for="sip_ujore" class="ml-1">Siperfaqja
                                ujore</label></div>
                        <div class="col-12"><input type="checkbox" name="pyll" id="Pyll" value="Pyll"><label
                                for="Pyll" class="ml-1">Pyll</label></div>
                        <div class="col-12"><input type="checkbox" name="vend_peshkim" id="vend_peshkim"
                                                   value="Vend Peshkim"><label for="vend_peshkim" class="ml-1">Vend për
                                peshkim</label></div>
                        <div class="col-12"><input type="checkbox" name="vend_skijim" id="vend_skijim"
                                                   value="Vend per skijim"><label for="vend_skijim" class="ml-1">Vend
                                per peshkim</label></div>
                    </div>

                </div>

                <div class="tok box row mt-3">
                    <div class="col-8"><input type="radio" id="shitet" name="kat" value="shitet"><label class="ml-2"
                                                                                                        for="shitet">Shitet</label><br>
                        <input type="radio" id="blehet" name="kat" value="blehet"><label class="ml-2"
                                                                                         for="blehet">Blehet</label><br>
                    </div>
                    <div class="col-8">
                        <input type="radio" id="meQera" name="kat" value="Jepet me qera"><label
                            class="ml-2"
                            for="blehet">Jepet
                            me qera</label><br>
                        <input type="radio" id="KërkohetMeqera" name="kat" value="Kërkohet me qera"><label
                            class="ml-2" for="blehet">Kërkohet
                            me qera</label><br>
                    </div>
                    <div class="row ml-1">
                        <span class="ml-3 mb-1"><b>Per Vendbanim:</b></span>
                        <div class="col-12"><input type="checkbox" name="uji" id="uji"
                                                   value="Ujë"><label
                                for="uji" class="ml-1">Ujë</label></div>
                        <div class="col-12"><input type="checkbox" name="energji" id="energji" value="Pyll"><label
                                for="energji"
                                class="ml-1">Energji Elektrike</label>
                        </div>
                        <div class="col-12"><input type="checkbox" name="tok" id="tok"
                                                   value="Tok"><label for="tok" class="ml-1">Tok</label></div>
                        <div class="col-12"><input type="checkbox" name="fush" id="fush"
                                                   value="Fush"><label for="fush" class="ml-1">Fush</label></div>
                        <div class="col-12"><input type="checkbox" name="pyll" id="pyll"
                                                   value="Pyll"><label for="pyll" class="ml-1">Pyll</label></div>
                        <div class="col-12"><input type="checkbox" name="asfalt" id="asfalt"
                                                   value="Asfalt"><label for="asfalt" class="ml-1">Asfalt</label></div>
                        <div class="col-12"><input type="checkbox" name="leje_nderitmi" id="leje_nderitmi"
                                                   value="Leje nderitmi"><label for="leje_nderitmi" class="ml-1">Leje Ndertimi</label></div>
                    </div>

                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="adresa">Adresa</label>
            <div class="col-md-5">
                <input type="text" class="form-control  form-control-sm" name="adresa" id="adresa">
                @error('adresa')
                {{$message}}
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="siperfaqja">Siperfaqja</label>
            <div class="col-md-5">
                <input type="text" class="form-control  form-control-sm" name="siperfaqja" id="siperfaqja">
                @error('siperfaqja')
                {{$message}}
                @enderror

            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="qmimi">Qmimi</label>
            <div class="col-md-5">
                <input type="text" class="form-control  form-control-sm" name="qmimi" id="qmimi">
                @error('qmimi')
                {{$message}}
                @enderror

            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="komuna">Komuna</label>
            <div class="col-md-5">
                <select class="form-control form-control-sm" name="komuna" id="komuna">
                    <option disabled selected>Zgjedh</option>
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
                @error('komuna')
                Zgjedh njerin nga opsionet
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="titulli">Titulli</label>
            <div class="col-md-5">
                <input type="text" class="form-control  form-control-sm" name="titulli" id="titulli">
                @error('titulli')
                {{$message}}
                @enderror

            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right" for="komenti">Pershkrimi</label>
            <div class="col-md-5">
                <textarea type="text" class="form-control  form-control-sm" name="komenti" id="komenti" cols="10" rows="5"></textarea>
                @error('komenti')
                {{$message}}
                @enderror

            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right"></label>
            <div class="col-md-5">
                <div class="input-group control-group increment">
                    <input type="file" name="filename[]" class="form-control form-control-sm">
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="button"><i
                                class="glyphicon glyphicon-plus"></i>Add
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right"></label>
            <div class="col-md-5">
                <div class="clone hide">
                    <div class="control-group input-group" style="margin-top:10px">
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-danger" type="button"><i
                                    class="glyphicon glyphicon-remove"></i>
                                Remove
                            </button>
                        </div>
                    </div>
                </div>

        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right"></label>
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary mt-2">Posto</button>
            </div>
        </div>


    </form>

    <script type="text/javascript">

        $(document).ready(function () {

            $(".btn-success").click(function () {
                var html = $(".clone").html();
                $(".increment").after(html);
            });

            $("body").on("click", ".btn-danger", function () {
                $(this).parents(".control-group").remove();
            });

        });

    </script>

    @endsection


