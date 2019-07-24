@extends('layouts.master')

@section('content')
		<h1>Edit Data Panti</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-lg-12">	
			<form action="/panti/{{$panti->id}}/update" method="POST">
				      		{{csrf_field()}}
				      	  <div class="form-group">
						    <label for="exampleInputEmail1">ID</label>
						    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID panti" value="{{$panti->id}}">
						  </div>
				      	  <div class="form-group">
						    <label for="exampleInputEmail1">NIK User</label>
						    <input name="nik_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK User" value="{{$panti->nik_user}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NIK Pengurus</label>
						    <input name="nik_pengurus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK Pengurus" value="{{$panti->nik_pengurus}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Panti</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Panti" value="{{$panti->nama}}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Koordinat Panti</label>
						    <input name="point_obj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="lat, long" value="{{$panti->point_obj}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Fasilitas</label>
						    <input name="butuh_fasilitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fasilitas yang Dibutuhkan" value="{{$panti->butuh_fasilitas}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Anak</label>
						    <input name="jumlah_anak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Anak" value="{{$panti->jumlah_anak}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">ID Jenis Panti</label>
						    <input name="jenispanti_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Jenis Panti " value="{{$panti->jenispanti_id}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Pengurus</label>
						    <input name="jumlah_pengurus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Pengurus" value="{{$panti->jumlah_pengurus}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Pimpinan</label>
						    <input name="nama_pimpinan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pimpinan" value="{{$panti->nama_pimpinan}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Kontak</label>
						    <input name="kontak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kontak Panti" value="{{$panti->kontak}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Panti" value="{{$panti->email}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Sosial Media</label>
						    <input name="sosmed" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sosial Media Panti" value="{{$panti->sosmed}}">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">ID Status Panti</label>
						    <input name="status_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Status Panti" value="{{$panti->status_id}}">
						  </div>


						  <div class="form-group">
						    <label for="exampleFormControlFile1">Photo Panti</label>
						    <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
						  </div>
						    <button type="submit" class="btn btn-warning">Update</button>
				        </form>
			</div>
		</div>


@endsection