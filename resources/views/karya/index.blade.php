@extends('layouts.master')

@section('content')

		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>Karya Anak Asuh</h1>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
				  Tambah Karya
				</button>

				
			</div>
			
			<table class="table table-hover">
				<tr>
					<th>Judul</th>
					<th>Jenis</th>
					<th>Deskripsi</th>
					<th>Nama Anak</th>				
					<th>Photo</th>
					<th> </th>
				</tr>
				@foreach($data_karya as $karya)
				<tr>
					<td><a href="/karya/{{$karya->id}}/profile">{{$karya->judul}}</a></td>
					<td>{{$karya->jenis}}</td>
					<td>{{$karya->deskripsi}}</td>
					<td>{{$karya->nama_anak}}</td>
					<td>{{$karya->photo}}</td>
					<td>
						<a href="/karya/{{$karya->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit" style="font-size:24px"></i></a>
						<a href="/karya/{{$karya->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Dihapus?') "><i class="fa fa-trash-o" style="font-size:24px"></i></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>

<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Karya</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<form action="/karya/create" method="POST">
				      		{{csrf_field()}}
				      	  <div class="form-group">
						    <label for="exampleInputEmail1">ID</label>
						    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Karya">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Panti ID</label>
						    <input name="panti_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Panti ID">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Judul</label>
						    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul Karya">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jenis</label>
						    <input name="jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Karya">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Deskripsi</label>
						    <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Deskripsi Karya">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Anak</label>
						    <input name="nama_anak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Anak">
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlFile1">Photo Karya</label>
						    <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
						  </div>
						    
						
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				        </form>
				      </div>
				    </div>
				  </div>
				

@endsection