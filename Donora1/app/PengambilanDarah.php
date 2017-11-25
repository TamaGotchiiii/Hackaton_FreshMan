<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengambilanDarah extends Model
{
    protected $table = 'pengambilandarah';
    protected $fillable = ['nama_pemesan','nik_pemesan','no_tlp_pemesan','nama_pasien','id_rumahsakit','lampiran'];

    public function rumahsakit(){
    	return $this->belongsTo(rumahsakit::class,'id_rumahsakit');

    }

}
