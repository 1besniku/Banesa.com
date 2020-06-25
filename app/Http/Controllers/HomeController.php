<?php

namespace App\Http\Controllers;

use App\Shpalljet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Home.home');
    }
    public function show()
    {
        $array_shpalljet = Shpalljet::where('is_aproved','=','1')->paginate(10);

        //dd($array_shpalljet);

        return view('Home.home', compact('array_shpalljet'));

    }
}
