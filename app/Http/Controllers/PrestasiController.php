<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestasi;
class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::all() ;
        return view('prestasi.index',compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestasi = new Prestasi([
            'id_ukm' => $request->input('id_ukm'),
            'nama_prestasi' => $request->input('nama_prestasi'),
            'peringkat_prestasi' => $request->input('peringkat_prestasi'),
            'tgl_prestasi' => $request->input('tgl_prestasi')
        ]);
        $prestasi->save();
        return \redirect('/prestasi');
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
    public function edit($id_prestasi)
    {
        $prestasi = Prestasi::find($id_prestasi);
        // $ukm = Ukm::where('id_ukm',$id_ukm)->first();
        //jika menggunakan find wajib menset primary key di model
        //jika menggunakan where boleh menset primary key di model boleh tidak
        return view('prestasi.edit',compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_prestasi)
    {
        $prestasi = Prestasi::find($id_prestasi);
        $prestasi -> id_ukm = $request->input('id_ukm');
        $prestasi->nama_prestasi = $request->input('nama_prestasi');
        $prestasi->peringkat_prestasi = $request->input('peringkat_prestasi');
        $prestasi->tgl_prestasi = $request->input('tgl_prestasi');
        $prestasi->save();
        return \redirect('/prestasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_prestasi)
    {
        $prestasi = Prestasi::find($id_prestasi);
        $prestasi->delete();
        return \redirect('/prestasi');
    }
}
