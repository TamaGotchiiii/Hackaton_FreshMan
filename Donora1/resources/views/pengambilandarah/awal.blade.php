@extends('master')
@section('container')

<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Pengambilan Darah</strong>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Pemesan</th>
				<th>No. KTP</th>
				<th>No. Telepon</th>
				<th>Nama Pasien</th>
				<th>Nama Rumah Sakit</th>
				<th>Golongan Darah</th>
				<th>status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php $x=1;?>
			@foreach($semuaPengambilan as $pengambilan)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$pengambilan->nama_pemesan or 'nama rumah sakit kosong'}}</td>
				<td>{{$pengambilan->nik_pemesan or 'nama rumah sakit kosong'}}</td>
				<td>{{$pengambilan->no_tlp_pemesan or 'nama rumah sakit kosong'}}</td>
				<td>{{$pengambilan->nama_pasien or 'nama rumah sakit kosong'}}</td>
				<td>{{$pengambilan->rumahsakit->nama or 'nama rumah sakit kosong'}}</td>
				<td>{{$pengambilan->jenisdarah->jenis_darah or 'nama rumah sakit kosong'}}</td>
				<td>{{$pengambilan->status or 'nama rumah sakit kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Approve"><i class="fa fa-check"></i></a>

						<a href="" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Tolak"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop