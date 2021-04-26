<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Struktur;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur = Struktur::all() ;
        return view('struktur.index',compact('struktur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('struktur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $struktur = new Struktur([
            'id_ukm' => $request->input('id_ukm'),
            'nama_struktur' => $request->input('nama_struktur'),
            'level' => $request->input('level'),
            'sub_level' => $request->input('sub_level')
        ]);
        $struktur->save();
        return \redirect('/struktur');
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
    public function edit($id_struktur)
    {
        $struktur = Struktur::find($id_struktur);
        // $ukm = Ukm::where('id_ukm',$id_ukm)->first();
        //jika menggunakan find wajib menset primary key di model
        //jika menggunakan where boleh menset primary key di model boleh tidak
        return view('struktur.edit',compact('struktur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_struktur)
    {
        $struktur = Struktur::find($id_struktur);
        $struktur -> id_ukm = $request->input('id_ukm');
        $struktur->nama_struktur = $request->input('nama_struktur');
        $struktur->level = $request->input('level');
        $struktur->sub_level = $request->input('sub_level');
        $struktur->save();
        return \redirect('/struktur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_struktur)
    {
        $struktur = Struktur::find($id_struktur);
        $struktur->delete();
        return \redirect('/struktur');
    }
}
