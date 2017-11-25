<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendonor extends Model
{
	protected $table = 'pendonor';
	protected $fillable = ['nik','nama','ttl','alamat','no_tlp','id_jenisdarah','status_kesediaan','level'];

	public function JenisDarah(){
		return $this->belongsTo(JenisDarah::class, 'id_jenisdarah');
	}	

	public function RiwayatDonor(){
		return $this->hasMany(RiwayatDonor::class,'id_pendonor');
	}    
}
