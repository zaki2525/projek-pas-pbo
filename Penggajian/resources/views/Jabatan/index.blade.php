@extends('layout.main')

@section('content')
      <div>
      	<h4>>>Data Jabatan</h4>
      	<a href="/jabatan/create" class="btn btn-info btn-md p-2 mb-3">Tambah data</a>
      </div>
      <div class="col-12 ps-1">
      	<table class="table table-bordered border-dark ">
      		<thead>
      			<tr>
      				<th scope="col">No</th>
      				<th scope="col">Nama Jabatan</th>
      				<th scope="col">Gaji Pokok</th>
      				<th scope="col">Upah Lembur</th>
      				<th scope="col">Action</th>
      			</tr>
      		</thead>
      		<tbody>
      		    
      			<tr>
      				<th scope="row">01</th>
      				<td>1111</td>
      				<td>1000000</td>
      				<td>1000</td>
      				<td>
      					<a href="/jabatan/edit" class="btn btn-warning btn-sm">Edit</a>
      					<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">Delete</a>
      				</td>
      			</tr>
      			
      		</tbody>
</table>
      	</div>
      </div>
      @endsection