<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatDonor extends Model
{
	protected $table = 'riwayatdonor';
	protected $fillable = ['id_pendonor'];

	public function pendonor(){
		return $this->belongsTo(pendonor::class,'id_pendonor');
	}    
}
