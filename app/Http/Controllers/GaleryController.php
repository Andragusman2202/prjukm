<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = Galery::all() ;
        return view('galery.index',compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galery = new Galery([
            'id_ukm' => $request->input('id_ukm'),
            'file' => $request->input('file'),
            'judul' => $request->input('judul'),
            'tgl_galery' => $request->input('tgl_galery'),
            'keterangan' => $request->input('keterangan')
        ]);
        $galery->save();
        return \redirect('/galery');
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
    public function edit($id_galery)
    {
        $galery = Galery::find($id_galery);
        // $ukm = Ukm::where('id_ukm',$id_ukm)->first();
        //jika menggunakan find wajib menset primary key di model
        //jika menggunakan where boleh menset primary key di model boleh tidak
        return view('galery.edit',compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_galery)
    {
        $galery = Galery::find($id_galery);
        $galery -> id_ukm = $request->input('id_ukm');
        $galery->file = $request->input('file');
        $galery->judul = $request->input('judul');
        $galery->tgl_galery = $request->input('tgl_galery');
        $galery->keterangan = $request->input('keterangan');
        $galery->save();
        return \redirect('/galery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_galery)
    {
        $galery = Galery::find($id_galery);
        $galery->delete();
        return \redirect('/galery');
    }
}
