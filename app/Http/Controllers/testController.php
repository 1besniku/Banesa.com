<?php

namespace App\Http\Controllers;

use App\Shpalljet;
use Illuminate\Http\Request;

class testController extends Controller
{
    //


    public function index(){

        return view('layouts.test');
    }

    public function store(Request $request){
        dd($request);
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();

        $image->move(public_path('images'), $imageName);
        return response()->json(['suscces' => $imageName]);
    }
}
