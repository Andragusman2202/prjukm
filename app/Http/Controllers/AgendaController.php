<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agenda = Agenda::all() ;
        return view('agenda.index',compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agenda = new Agenda([
            'id_ukm' => $request->input('id_ukm'),
            'judul_agenda' => $request->input('judul_agenda'),
            'isi_agenda' => $request->input('isi_agenda'),
            'tgl_agenda' => $request->input('tgl_agenda')
        ]);
        $agenda->save();
        return \redirect('/agenda');
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
    public function edit($id_agenda)
    {
        $agenda = Agenda::find($id_agenda);
        // $ukm = Ukm::where('id_ukm',$id_ukm)->first();
        //jika menggunakan find wajib menset primary key di model
        //jika menggunakan where boleh menset primary key di model boleh tidak
        return view('agenda.edit',compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_agenda)
    {
        $agenda = Agenda::find($id_agenda);
        $agenda->id_ukm = $request->input('id_ukm');
        $agenda->judul_agenda = $request->input('jdul_agenda');
        $agenda->isi_agenda = $request->input('isi_agenda');
        $agenda->tgl_agenda = $request->input('tgl_agenda');
        $agenda->save();
        return \redirect('/agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_agenda)
    {
        $agenda = Agenda::find($id_agenda);
        $agenda->delete();
        return \redirect('/agenda');
    }
}
