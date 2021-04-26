@extends('layouts.app')

@section('content')
<!-- Content Header (Page Number)-->
<section class="content-header">
    <div class="container-fuild">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>STRUKTUR</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item ctive">STRUKTUR</li>
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
                        <h3 class="card-title">Tambah Data Struktur</h3>
                        <div class="text-right">
                            <a href="{{url("struktur")}}" class="btn btn-sm btn-success mb-1">Lihat Data Struktur</a>
                        </div>
                    </div>
                    <!-- CArs-header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                 <form action="{{url("/struktur")}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="id_ukm">ID UKM :</label>
                                        <input class="form-control" placeholder="Masukkan ID UKM" type="text" name="id_ukm">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_struktur">NAMA STRUKTUR :</label>
                                        <input class="form-control" placeholder="Masukkan Struktur" type="text" name="nama_struktur">
                                    </div>
                                    <div class="form-group">
                                        <label for="level">LEVEL :</label>
                                        <input class="form-control" placeholder="Masukkan Level" type="text" name="level">
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_level">SUB LEVEL :</label>
                                        <input class="form-control" placeholder="Masukkan Sub Level" type="text" name="sub_level">
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn  btn-sm btn-primary" >SAVE</button>
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