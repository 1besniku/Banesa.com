<?php

namespace App\Http\Controllers;

use App\Shpalljet;
use Illuminate\Http\Request;

class AprovoController extends Controller
{
    //

    public function index()
    {

        $array_shpalljet = Shpalljet::latest()->paginate(15);
        //dd($array_shpalljet);
        return view('Aprovimi.index',compact('array_shpalljet'));
    }

    public function update($id){


        $shpalljet = Shpalljet::find($id);

        $shpalljet->update([
                'is_aproved' => 1,
            ]

        );

        return redirect('/aprovo-shpalljet')->with('status', 'U aprovua me sukses!');

    }

    public function destroy($id){

        $porperty = Shpalljet::find($id);
        $porperty->delete();

        return redirect('/aprovo-shpalljet');
    }
}
