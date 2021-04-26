@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>UKM</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">UKM</li>
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
                            <a href="{{url("ukm")}}" class="btn btn-sm btn-success mb-1">Lihat Data UKM</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                 <form action="{{url("/ukm/{$ukm->id_ukm}")}}" method="post">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_ukm">Nama UKM :</label>
                                        <input value="{{$ukm->nama_ukm}}" class="form-control" placeholder="Masukkan Nama UKM" type="text" name="nama_ukm">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="bio_ukm">Bio UKM :</label>
                                        <textarea class="form-control" placeholder="Masukkan Bio UKM" name="bio_ukm" >{{$ukm->bio_ukm}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="visi">Visi :</label>
                                        <textarea class="form-control" placeholder="Masukkan Visi" name="visi" >{{$ukm->visi}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="misi">Misi :</label>
                                        <textarea class="form-control" placeholder="Masukkan Misi" name="misi" >{{$ukm->misi}}</textarea>
                                    </div>
                                    <div class="form-group"> 
                                        <label for="tgl_berdiri">Tanggal Berdiri :</label>
                                        <input value="{{$ukm->tgl_berdiri}}"class="form-control" placeholder="Masukkan Tanggal Berdiri" type="date" name="tgl_berdiri">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="logo_file">FILE :</label>
                                        <input value="{{$ukm->logo_file}}"class="form-control" placeholder="Masukkan File" type="file" name="logo_file">
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