<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function card() {

        $series = config('series');
        $data = ['series' => $series];
    
        return view('comic', $data);
    }  

    public function show($id) {
                $series = config('series');
                $data = ['series' => $series[$id]];
                return view('details', $data);
            }
}
