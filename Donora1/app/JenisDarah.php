<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisDarah extends Model
{
    protected $table = 'jenisdarah';
    protected $fillable = ['jenis_darah','stok'];

    public function Pendonor(){
    	return $this->hasMany(pendonor::class,'id_jenisdarah');
    }

    public function PengambilanDarah(){
    	return $this->hasMany(PengambilanDarah::class);

    }
}
