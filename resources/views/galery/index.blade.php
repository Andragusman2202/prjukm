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

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data GALERY</h3>
                         <div class="text-right">
                             <a href="{{ url("galery/create") }}" class="btn btn-sm btn-success mb-1">Tambah Data</a>
                        </div>
                    </div>
                    <!-- Card Hedaer -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                   <th> NO</th>
                                   <th> ID UKM </th>
                                   <th> FILE </th>
                                   <th> JUDUL GALERY </th>
                                   <th> TANGGAL GALERY </th>
                                   <th> KETERANGAN </th>
                                   <th colspan="2"> AKSI </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;   
                                @endphp
                                @foreach ($galery as $galery)
                                <tr>
                                    <td>{{$no++}} </td>
                                    <td>{{$galery->id_ukm}}</td>
                                    <td>{{$galery->file}}</td>
                                    <td>{{$galery->judul}} </td>
                                    <td>{{$galery->tgl_galery}}</td>
                                    <td>{{$galery->keterangan}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{url("galery/{$galery->id_galery}/edit")}}">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="{{url("galery/{$galery->id_galery}")}}" method="post">
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