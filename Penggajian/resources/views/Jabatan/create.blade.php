@extends('Layout.main')

 @section('content')
 		<div class="col-12 ps-4">
 			<h4>>> Tambah Data Jabatan</h4>
 				<a href="/jabatan/index" class="btn btn-info btn-md p-2 mb-3">Kembali</a>
 		</div>
 		<div class="col-12 ps-4">
 			<div class="col-12 bg-light p-2 rounded-3 shadow-sm">
 				<form action="/jabatan/store" method="POST">
 				@csrf
 			<div class="mb-3 row">
 			<label for="inputPassword" class="col-sm-2 col-form-label">Nama 
			Jabatan</label>
	 <div class="col-sm-10">
 		<input type="text" class="form-control" name="nama_jabatan">
 	 </div>
 	 </div>
 		<div class="mb-3 row">
 				<label for="inputPassword" class="col-sm-2 col-form-label">Gaji Pokok</label>
 		<div class="col-sm-10">
 				<input type="text" class="form-control" name="jumlah_gaji_pokok">
 		</div>
 		</div>
			 <div class="mb-3 row">
 		<label for="inputPassword" class="col-sm-2 col-form-label">Upah Lembur</label>
			<div class="col-sm-10">
 				<input type="text" class="form-control" name="upah_lembur">
 			</div>
 			</div>
				 <div class="d-grid text-end">
			<div class="col-sm-12">
				<button class="btn btn-primary btn-sm"type="submit">CREATE</button>
 			</div>
 			</div>
 		</form>
 </div>
 </div>
 @endsection