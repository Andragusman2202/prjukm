@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>PRESTASI</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">PRESTASI</li>
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
                            <a href="{{url("prestasi")}}" class="btn btn-sm btn-success mb-1">Lihat Data PRESTASI</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                 <form action="{{url("/prestasi/{$prestasi->id_prestasi}")}}" method="post">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label for="id_ukm">ID UKM :</label>
                                        <input value="{{$prestasi->id_ukm}}" class="form-control" placeholder="Masukkan ID UKM" type="text" name="id_ukm">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="nama_prestasi">NAMA PRESTASI :</label>
                                        <input value="{{$prestasi->nama_prestasi}}"class="form-control" placeholder="Masukkan Nama Prestasi" type="text" name="nama_prestasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="peringkat_prestasi">PERINGKAT PRESTASI :</label>
                                        <input value="{{$prestasi->peringkat_prestasi}}"class="form-control" placeholder="Masukkan Peringkat Prestasi" type="text" name="peringkat_prestasi">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="tgl_prestasi">Tanggal PRESTASI :</label>
                                        <input value="{{$prestasi->tgl_prestasi}}"class="form-control" placeholder="Masukkan Tanggal Prestasi" type="date" name="tgl_prestasi">
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>

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