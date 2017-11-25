<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rumahsakit extends Model
{
    protected $table = 'rumahsakit';
    protected $fillable = ['nama','alamat','no_tlp'];
    public $timestamp = false;

    public function PengambilanDarah(){
    	return $this->hasMany(PengambilanDarah::class,'id_rumahsakit');
    }
}
