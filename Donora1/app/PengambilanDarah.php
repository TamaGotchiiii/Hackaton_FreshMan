<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengambilanDarah extends Model
{
    protected $table = 'pengambilandarah';
    

    public function rumahsakit(){
    	return $this->belongsTo(rumahsakit::class,'id_rumahsakit');

    }

    public function jenisdarah(){
    	return $this->belongsTo('App\JenisDarah','id_golongan');
    }

}
