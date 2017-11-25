@extends('master')
@section('container')

<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('rumahsakit')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i>Detail Data Rumah Sakit</a></strong>
	</div>
	<table class="table">
		<tr>
			<td>Nama Rumah Sakir</td>
			<td>:</td>
			<td>{{$rumahsakit->nama}}</td>
		</tr>
		<tr>
			<td>No. Telepon</td>
			<td>:</td>
			<td>{{$rumahsakit->no_tlp}}</td>
		</tr>
		<tr>
			<td>Alamat Rumah Sakit</td>
			<td>:</td>
			<td>{{$rumahsakit->alamat}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$rumahsakit->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$rumahsakit->updated_at}}</td>
		</tr>
	</table>
</div>
@stop