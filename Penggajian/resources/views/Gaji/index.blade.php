@extends('layout.main')

@section('content')
      <div>
      	<h4>>>Data Gaji</h4>
      	<a href="/Gaji/create" class="btn btn-info btn-md p-2 mb-3">Tambah data</a>
      </div>
      <div class="col-12 ps-1">
      	<table class="table table-bordered border-dark ">
      		<thead>
      			<tr>
      				<th scope="col">Id</th>
      				<th scope="col">Karyawan</th>
      				<th scope="col">Bulan</th>
      				<th scope="col">Sakit</th>
      				<th scope="col">Izin</th>
                              <th scope="col">Alpha</th>
                              <th scope="col">Total Tunjangan</th>
                              <th scope="col">Gaji Kotor</th>
                              <th scope="col">Pajak</th>
                              <th scope="col">Gaji Bersih</th>
                              <th scope="col">Action</th>
      			</tr>
      		</thead>
      		<tbody>
      		    
      			<tr>
      				<th scope="row">01</th>
      				<td></td>
      				<td></td>
      				<td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
      				<td>
      					<a href="/Gaji/edit" class="btn btn-warning btn-sm">Edit</a>
      					<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">Delete</a>
      				</td>
      			</tr>
      			
      		</tbody>
</table>
      	</div>
      </div>
      @endsection