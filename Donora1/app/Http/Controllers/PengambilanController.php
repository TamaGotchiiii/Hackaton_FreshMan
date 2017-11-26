<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengambilanDarah;
use App\JenisDarah;

class PengambilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $informasi = 'Gagal Melakukan Aksi';
    protected $guarded = ['id'];
    public function index()
    {
        $semuaPengambilan = PengambilanDarah::all();
        $jenisdarah = JenisDarah::all();
        return view('pengambilandarah.awal', compact('semuaPengambilan','jenisdarah'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengambilan = new PengambilanDarah();
        $pengambilan->nama_pemesan=$request->nama_pemesan;
        $pengambilan->nik_pemesan=$request->nik_pemesan;
        $pengambilan->no_tlp_pemesan=$request->no_tlp_pemesan;
        $pengambilan->nama_pasien = $request->nama_pasien;
        $pengambilan->id_rumahsakit = $request->id_rumahsakit;
        $pengambilan->id_golongan = $request->id_golongan;
        $pengambilan->status = "Belum Di Approve";

        
        if($pengambilan->save()) $this->informasi = "Data Rumah Sakit Telah Diperbarui!!";
        return redirect('/')->with(['informasi'=>$this->informasi]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
