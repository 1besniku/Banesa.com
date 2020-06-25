<?php

namespace App\Http\Controllers;

use App\Shpalljet;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function index(Request $request)
    {
      // dd($request);

        $search = Shpalljet::where('kategoria', 'LIKE', $request->objekti)
            ->orWhere('llojishpalljes', 'LIKE', $request->llojishpalljes)
            ->orWhere('komuna','LIKE', $request->komuna)
            ->paginate(10);

        $collection = $search->isEmpty();
        //dd($collection);
        if($collection == true){
            return redirect('/')->with('status', 'Nuk ka te dhena per ket kerkim!');
        }else{
            return view('Search.index', compact('search'));
        }

    }

}
