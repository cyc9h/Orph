@extends('layouts.master')

@section('content')
		<h1>Edit Data Karya</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
			<form action="/karya/{{$karya->id}}/update" method="POST">
				      		{{csrf_field()}}
				      	 
						  <div class="form-group">
						    <label for="exampleInputEmail1">Judul</label>
						    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul Karya" value="{{$karya->judul}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jenis</label>
						    <input name="jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Karya" value="{{$karya->jenis}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Deskripsi</label>
						    <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi Karya" value="{{$karya->deskripsi}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Anak</label>
						    <input name="nama_anak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Anak" value="{{$karya->nama_anak}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlFile1">Photo Karya</label>
						    <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1" >
						  </div>
						  <button type="submit" class="btn btn-warning">Update</button>
				</form>
			</div>
		</div>


@endsection