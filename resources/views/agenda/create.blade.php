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
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Agenda</h3>
                        <div class="text-right">
                            <a href="{{ url("agenda") }}" class="btn btn-sm btn-success mb-1">Lihat Data AGENDA</a>
                        </div>
                    </div>
                     <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url("/agenda")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="id_ukm">ID UKM :</label>
                                <input class="form-control" placeholder="Masukkan ID UKM" type="text" name="id_ukm">
                            </div>
                            <div class="form-group">
                                <label for="judul_agenda">JUDUL AGENDA :</label>
                                <input class="form-control" placeholder="Masukkan Judul Agenda" type="text" name="judul_agenda">
                            </div>
                            <div class="form-group">
                                <label for="isi_agenda">ISI AGENDA :</label>
                                <textarea class="form-control" placeholder="Masukkan Isi Agenda" name="isi_agenda" ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tgl_agenda">Tanggal Agenda :</label>
                                <input class="form-control" placeholder="Masukkan Tanggal Agenda" type="date" name="tgl_agenda">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">SAVE</button>
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
