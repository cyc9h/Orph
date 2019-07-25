<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminpantiController extends Controller
{
     public function index()
    {
    	$data_AdminPanti = \App\Adminpanti::all();
    	return view ('adminpanti.index',['data_AdminPanti'=>$data_AdminPanti]);
    }
    public function create(Request $request)
    {
    	\App\Adminpanti::create($request->all());
    	return redirect('/adminpanti')->with('sukses','Data berhasil disimpan');
    }	

    
}
