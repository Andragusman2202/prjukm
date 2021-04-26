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
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">AGENDA</li>
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
                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data AGENDA</h3>
                        <div class="text-right">
                            <a href="{{ url("agenda/create") }}" class="btn btn-sm btn-success mb-1">Tambah Data</a>
                        </div>
                    </div> 
                    <!-- Card Header --> 
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                   <th> NO</th>
                                   <th> ID UKM </th>
                                   <th> JUDUL AGENDA </th>
                                   <th> ISI AGENDA </th>
                                   <th> TANGGAL AGENDA </th>
                                   <th colspan="2"> AKSI </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                 $no=1;   
                                @endphp
                                @foreach ($agenda as $agenda)
                                <tr>
                                    <td>{{$no++}} </td>
                                    <td>{{$agenda->id_ukm}}</td>
                                    <td>{{$agenda->judul_agenda}}</td>
                                    <td> {{$agenda->isi_agenda}}</td>
                                    <td>{{$agenda->tgl_agenda}}</td> 
                                    <td>
                                        <a class="btn btn-primary" href="{{url("agenda/{$agenda->id_agenda}/edit")}}">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="{{url("agenda/{$agenda->id_agenda}")}}" method="post">
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