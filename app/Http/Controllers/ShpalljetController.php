<?php

namespace App\Http\Controllers;

use App\foto;
use App\Shpalljet;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;
use \Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ShpalljetController extends Controller
{

    public function index()
    {

        return view('Shpalljet.index');
    }

    public function store(Request $request)
    {

        //dd($request);
        if ($request->filename == null) {
            return back();
        } else {
            $request->validate([
                'emri' => 'required|min:2',
                'mbiemri' => 'required|min:2',
                'email' => 'required',
                'numri_tel' => 'required|min:9|max:13',
                'kategoria' => 'required',
                'adresa' => 'required|min:3',
                'siperfaqja' => 'required|numeric|min:2',
                'titulli' => 'required|max:20',
                'komenti' => 'required',
                'qmimi' => 'required|numeric',
                'filename.*' => 'required|file|mimes:jpeg,jpg,png,svg'
            ]);

            $shplljet = Shpalljet::create([
                'is_aproved' => 0,
                'user_id' => auth()->user() ? auth()->user()->id : null,
                'emri' => $request->emri,
                'mbiemri' => $request->mbiemri,
                'emaili' => $request->email,
                'nr_tel' => $request->numri_tel,
                'kategoria' => $request->kategoria,
                'adresa' => $request->adresa,
                'llojishpalljes' => $request->kat ? $request->kat : null,
                'garazhda' => $request->garazhd ? $request->garazhd : null,
                'soba_oxhak' => $request->sob ? $request->sob : null,
                'shtepi_re' => $request->ndertes_ere ? $request->ndertes_ere : null,
                'shtepi_vequar' => $request->shtepi_vequar ? $request->shtepi_vequar : null,
                'rinovuar' => $request->rinovuar ? $request->rinovuar : null,
                'mobiluar' => $request->mobiluar ? $request->mobiluar : null,
                'uji' => $request->uji ? $request->uji : null,
                'energji_elektrike' => $request->energji ? $request->energji : null,
                'ndertes_montuse' => $request->ndertes_montuse ? $request->ndertes_montuse : null,
                'ndertes_ngurt' => $request->ndertes_ngurt ? $request->ndertes_ngurt : null,
                'ndertes_nentoksore' => $request->nentoksotr ? $request->nentoksotr : null,
                'ballkon' => $request->ballkon ? $request->ballkon : null,
                'kat_cati' => $request->kat_qati ? $request->kat_qati : null,
                'ashensor' => $request->ashensor ? $request->ashensor : null,
                'bodrum' => $request->bodru ? $request->bodru : null,
                'interfon' => $request->interfon ? $request->interfon : null,
                'dublex' => $request->dublex ? $request->dublex : null,
                'siperfaqe_ujore' => $request->gjinia_shok ? $request->gjinia_shok : null,
                'pyll' => $request->pyll ? $request->pyll : null,
                'vend_peshkim' => $request->vend_peshkim ? $request->vend_peshkim : null,
                'vend_skijim' => $request->vend_skijim ? $request->vend_skijim : null,
                'tok' => $request->tok ? $request->tok : null,
                'fush' => $request->fush ? $request->fush : null,
                'asfalt' => $request->asfalt ? $request->asfalt : null,
                'leje_ndertimi' => $request->leje_nderitmi ? $request->leje_nderitmi : null,
                'qmimi' => $request->qmimi,
                'komuna' => $request->komuna,
                'siperfaqja' => $request->siperfaqja,
                'komenti' => $request->komenti,
                'titulli' => $request->titulli,
            ]);

            $slug_property =  "$shplljet->id .$request->kategoria .$request->komuna";

            $slug = Str::slug( $slug_property,'-');
            //dd($slug);
            $shplljet->update([
                'slug' => $slug
            ]);

            if ($request->hasfile('filename')) {

                foreach ($request->file('filename') as $image) {


                    $fileName = uniqid() . $image->getClientOriginalName();

                    $destination_path = public_path('/thumbnail');
                    //dd($test);
                    $risize_image = Image::make($image->getRealPath());
                    $risize_image->resize(210, 160, function ($constration) {

                        $constration->aspectRatio();

                    })->resizeCanvas(210, 160,'center', false, '757575')->save($destination_path . '/' . $fileName);

                    $destination_path = public_path('/images');
                    $image->move($destination_path, $fileName);
                    $img = Image::make(public_path('/images/' . $fileName))->resize(650, 400, function($constration){
                        $constration->aspectRatio();

                    })->resizeCanvas(650, 480,'center', false, '757575');
                    $img->save();


                    $foto = foto::create([
                        'shpalljet_id' => $shplljet->id,
                        'foto_emri' => $fileName
                    ]);

                }
            }

            return redirect('/posto-shpalljen');
        }
    }

    public function show($id)
    {
        // dd($id);

        $array_shpalljet = Shpalljet::find($id);


        return view('Shpalljet.show', compact('array_shpalljet'));
    }

    public function shpalljet()
    {
        $shpalljet = Shpalljet::where('user_id', '=', auth()->user()->id)->where('is_aproved', '=', '1')->get();
        $collection = $shpalljet->isEmpty();
        //dd($collection);
        if ($collection == true) {
            return view('llogaria.index1');
        } else {
            return view('llogaria.index', compact('shpalljet'));
        }
    }


}
