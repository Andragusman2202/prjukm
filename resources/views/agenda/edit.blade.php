@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>AGENDA</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">AGENDA</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                        <div class="text-right">
                            <a href="{{url("agenda")}}" class="btn btn-sm btn-success mb-1">Lihat Data AGENDA</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                 <form action="{{url("/agenda/{$agenda->id_agenda}")}}" method="post">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label for="id_ukm">ID UKM :</label>
                                        <input value="{{$agenda->id_ukm}}" class="form-control" placeholder="Masukkan id_agenda" type="text" name="id_agenda">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="judul_agenda">Judul Agenda :</label>
                                        <input value="{{$agenda->judul_agenda}}"class="form-control" placeholder="Masukkan judul Agenda" type="text" name="judul_agenda">
                                    </div>
                                    <div class="form-group">
                                        <label for="isi_apgenda">Isi Agenda :</label>
                                        <textarea class="form-control" placeholder="Masukkan Isi Agenda" name="isi_agenda" >{{$agenda->isi_agenda}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_agenda">Tanggal Agenda :</label>
                                        <input value="{{$agenda->tgl_agenda}}"class="form-control" placeholder="Masukkan tgl agenda" type="date" name="tgl_agenda">
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

    
@endsection