<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class DetailController extends Controller
{
    //
    public function card() {

        $series = Comic::all();
    
        return view('comic', compact('series'));
    }  

    public function show($id) {
                $serie = Comic::where('id', $id) ->first();
                return view('details', compact('serie'));
            }
}
