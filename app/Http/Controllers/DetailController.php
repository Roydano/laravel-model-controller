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
}
