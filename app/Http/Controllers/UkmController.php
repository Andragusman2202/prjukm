<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukm;
class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukm = Ukm::all();
        return view('ukm.index',compact('ukm'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ukm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //return $request; //melihat data yang dikirim dari form
//         return $request->nama_ukm; //melihat data yang dikirim dari form
// return $request->input('nama_ukm');
        $foto = $request->file('logo_file');
        $tujuan_upload_foto = 'data_foto';
        $upload_photo = 'ukm-'.$request->nama_ukm.'-'.time().'.'.$foto->extension();
        $uploadFoto = $foto->storeAs($tujuan_upload_foto, $upload_photo);

        $ukm = new Ukm([
            'id_ukm' => $request->id_ukm,
            'nama_ukm' => $request->input('nama_ukm'),
            'bio_ukm' => $request->input('bio_ukm'),
            'visi' => $request->input('visi'),
            'misi' => $request->input('misi'),
            'tgl_berdiri' => $request->input('tgl_berdiri'),
            'logo_file' => $upload_photo
        ]);
        $ukm->save();
        return \redirect('/ukm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ukm)
    {
        $ukm = Ukm::find($id_ukm);
        // $ukm = Ukm::where('id_ukm',$id_ukm)->first();
        //jika menggunakan find wajib menset primary key di model
        //jika menggunakan where boleh menset primary key di model boleh tidak
        return view('ukm.edit',compact('ukm'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ukm)
    {
        $ukm = Ukm::find($id_ukm);
        $ukm->nama_ukm = $request->input('nama_ukm');
        $ukm->bio_ukm = $request->input('bio_ukm');
        $ukm->visi = $request->input('visi');
        $ukm->misi = $request->input('misi');
        $ukm->tgl_berdiri = $request->input('tgl_berdiri');
        $ukm->logo_file = $request->input('logo_file');
        $ukm->save();
        return \redirect('/ukm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_ukm)
    {
        $ukm = Ukm::find($id_ukm);
        $ukm->delete();
        return \redirect('/ukm');
    }
}
