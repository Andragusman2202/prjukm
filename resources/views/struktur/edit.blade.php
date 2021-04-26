@extends('layouts.app')

@section('content')
<!-- Content Header (Page Header)-->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>STRUKTUR</h1>
            </div>
            <div class="col-sm-6">
                <ol class="braedcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Struktur</li>    
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
                            <a href="{{url("struktur")}}" class="btn btn-sm btn-success mb-1">Lihat Data Struktur</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                 <form action="{{url("/struktur/{$struktur->id_struktur}")}}" method="post">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label for="id_ukm">ID UKM :</label>
                                        <input value="{{$struktur->id_ukm}}" class="form-control" placeholder="Masukkan id_ukm" type="text" name="id_ukm">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="nama_struktur">Nama Struktur :</label>
                                        <input value="{{$struktur->nama_struktur}}"class="form-control" placeholder="Masukkan Nama Struktur" type="text" name="nama_struktur">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="level">Level :</label>
                                        <input value="{{$struktur->level}}"class="form-control" placeholder="Masukkan Level" type="text" name="level">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="sub_level">Sub Level :</label>
                                        <input value="{{$struktur->sub_level}}"class="form-control" placeholder="Masukkan Sub Lvel" type="text" name="sub_level">
                                    </div>
                                    <div clas="text-right">
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