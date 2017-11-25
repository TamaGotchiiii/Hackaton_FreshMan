@extends('master')
@section('container')

<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Rumah Sakit</strong>
		<a href="{{url('rumahsakit/tambah')}}" class = "btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Rumah Sakit</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Rumah Sakit</th>
				<th>Alamat</th>
				<th>No. Telepon</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php $x=1;?>
			@foreach($semuaRumahSakit as $rumahsakit)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$rumahsakit->nama or 'nama rumah sakit kosong'}}</td>
				<td>{{$rumahsakit->alamat or 'alamat Kosong'}}</td>
				<td>{{$rumahsakit->no_tlp or 'no telepon Kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('rumahsakit/edit/'.$rumahsakit->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="ubah"><i class="fa fa-pencil"></i></a>

						<a href="{{url('rumahsakit/lihat/'.$rumahsakit->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>

						<a href="{{url('rumahsakit/hapus/'.$rumahsakit->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop