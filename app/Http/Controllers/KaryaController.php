<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryaController extends Controller
{
    public function index()
    {
    	$data_karya = \App\Karya::all();
    	return view ('karya.index',['data_karya'=>$data_karya]);
    }

    public function create(Request $request)
    {
    	\App\Karya::create($request->all());
    	return redirect('/karya')->with('sukses','Data berhasil disimpan');
    }	

    public function edit($id)
    {
    	$karya = \App\Karya::find($id);
    	return view('karya/edit',['karya'=>$karya]);
    }

    public function update(Request $request,$id)
    {
    	$karya = \App\Karya::find($id);
    	$karya -> update($request->all());
    	return redirect('/karya')->with('sukses', 'Data berhasil di-update');
    }

    public function delete($id)
    {
    	$karya = \App\Karya::find($id);
    	$karya -> delete($karya);
    	return redirect('/karya')->with('sukses', 'Data berhasil dihapus');
    }
}
