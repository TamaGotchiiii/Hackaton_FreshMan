<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rumahsakit;

class RumahSakitController extends Controller
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
        $semuaRumahSakit = rumahsakit::all();
        return view('rumahsakit.awal', compact('semuaRumahSakit'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rumahsakit.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rumahsakit = new rumahsakit();
        $rumahsakit->nama=$request->nama;
        $rumahsakit->alamat=$request->alamat;
        $rumahsakit->no_tlp=$request->no_tlp;

        if($rumahsakit->save()) $this->informasi = "Data Rumah Sakit Telah Diperbarui!!";
        return redirect('rumahsakit')->with(['informasi'=>$this->informasi]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rumahsakit = rumahsakit::find($id);
        return view('rumahsakit.lihat')->with(array('rumahsakit'=>$rumahsakit));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rumahsakit = rumahsakit::find($id);
        return view('rumahsakit.edit')->with(array('rumahsakit'=>$rumahsakit));
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
        $rumahsakit = rumahsakit::find($id);
        $rumahsakit->nama = $request->nama;
        $rumahsakit->alamat = $request->alamat;
        $rumahsakit->no_tlp = $request->no_tlp;


        if($rumahsakit->save()) $this->informasi = "Data Rumah Sakit Telah Diperbarui!!";
        return redirect('rumahsakit')->with(['informasi'=>$this->informasi]);
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
