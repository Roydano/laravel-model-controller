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
                $series = config('series');
                $data = ['series' => $series[$id]];
                return view('details', $data);
            }
}
