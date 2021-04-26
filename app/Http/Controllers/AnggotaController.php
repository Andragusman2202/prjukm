<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all() ;
        return view('anggota.index',compact('anggota'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anggota = new Anggota([
            'id_ukm' => $request->input('id_ukm'),
            'id_struktur' => $request->input('id_struktur'),
            'nama_anggota' => $request->input('nama_anggota'),
            'tgl_masuk' => $request->input('tgl_masuk'),
            'tgl_keluar' => $request->input('tgl_keluar'),
            'status' => $request->input('status'),
            'alasan_keluar' =>$request->input('alasan_keluar')
        ]);
        $anggota->save();
        return \redirect('/anggota');
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
    public function edit($id_anggota)
    {
        $anggota = Anggota::find($id_anggota);
        // $ukm = Ukm::where('id_ukm',$id_ukm)->first();
        //jika menggunakan find wajib menset primary key di model
        //jika menggunakan where boleh menset primary key di model boleh tidak
        return view('anggota.edit',compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_anggota)
    {
        $anggota = Anggota::find($id_anggota);
        $anggota->id_ukm = $request->input('id_ukm');
        $anggota->id_struktur = $request->input('id_struktur');
        $anggota->nama_anggota = $request->input('nama_anggota');
        $anggota->tgl_masuk = $request->input('tgl_masuk');
        $anggota->tgl_keluar = $request->input('tgl_keluar');
        $anggota->status = $request->input('status');
        $anggota->alasan_keluar = $request->input('alasan_keluar');
        $anggota->save();
        return \redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_anggota)
    {
        $anggota = Anggota::find($id_anggota);
        $anggota->delete();
        return \redirect('/anggota');
    }
}
