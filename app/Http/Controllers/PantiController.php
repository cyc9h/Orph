<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantiController extends Controller
{
     public function index()
    {
    	$data_panti = \App\Panti::all();
    	return view ('panti.index',['data_panti'=>$data_panti]);
    }
}
