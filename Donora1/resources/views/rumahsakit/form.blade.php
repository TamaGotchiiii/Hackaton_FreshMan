

<div class="form-group">
	<br>	
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control', 'id'=>'nama','placeholder'=>"Masukkan Nama Rumah Sakit"]) !!}
		<br>
	</div>
</div>


<div class="form-group">
	<label class="col-sm-2 control-label" id="no_tlp">No. Telepon</label>
	<div class="col-sm-10">
		{!! Form::text('no_tlp',null,['class'=>'form-control', 'id'=>'no_tlp', 'placeholder'=>"Masukkan Nomer Telepon Rumah Sakit"]) !!}
		<br>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control', 'id'=>'alamat', 'placeholder'=>"Masukkan Alamat Rumah Sakit"]) !!}
		<br>
	</div>
</div>




