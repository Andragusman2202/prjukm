@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ANGGOTA</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">ANGGOTA</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<!--MAin COntent --> 
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Anggota</h3>
                        <div class="text-right">
                            <a href="{{url('anggota/create')}}" class="btn btn-sm btn-success mb-1">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                   <th> NO</th>
                                   <th> ID UKM </th>
                                   <th> ID STRUKTUR </th>
                                   <th> NAMA ANGGOTA </th>
                                   <th> TANGGAL MASUK </th>
                                   <th> TANGGAL KELUAR </th>
                                   <th> STATUS</th>
                                   <th> ALASAN KELUAR </th>
                                   <th colspan="2"> AKSI </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;   
                               @endphp
                                @foreach ($anggota as $anggota)
                                <tr>
                                    <td>{{$no++}} </td>
                                    <td>{{$anggota->id_ukm}}</td>
                                    <td>{{$anggota->id_struktur}}</td>
                                    <td>{{$anggota->nama_anggota}} </td>
                                    <td> {{$anggota->tgl_keluar}}</td>
                                    <td>{{$anggota->tgl_masuk}}</td> 
                                    <td> {{$anggota->status}}</td>
                                    <td> {{$anggota->alasan_keluar}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{url("anggota/{$anggota->id_anggota}/edit")}}">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="{{url("anggota/{$anggota->id_anggota}")}}" method="post">
                                            @csrf
                                            @method ('DELETE')
                                            <button class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection