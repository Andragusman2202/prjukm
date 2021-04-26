@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>GALERY</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">GALERY</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main Content --> 
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data GALERY</h3>
                        <div class="text-right">
                             <a href="{{ url("galery") }}" class="btn btn-sm btn-success mb-1">Lihat Data GALERY</a>
                        </div>
                    </div>
                    <!-- Card Hedaer -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{url("/galery")}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="id_ukm">ID UKM :</label>
                                        <input class="form-control" placeholder="Masukkan ID UKM" type="text" name="id_ukm">
                                    </div>
                                    <div class="form-group">
                                        <label for="file">FILE :</label>
                                        <input class="form-control" placeholder="Masukkan File" type="file" name="file">
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">JUDUL :</label>
                                        <input class="form-control" placeholder="Masukkan Judul" type="text" name="judul">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_galery">TANGGAL GALERY :</label>
                                        <input class="form-control" placeholder="Masukkan tanggal Galery" type="date" name="tgl_galery">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">KETERANGAN :</label>
                                        <textarea class="form-control" placeholder="Masukkan Keterangan" name="keterangan" ></textarea>
                                    </div>
                                    <div clas="text-right">
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