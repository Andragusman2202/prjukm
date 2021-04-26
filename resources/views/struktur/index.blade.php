@extends('layouts.app')

@section('content')
<!--content Header (page Header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>STRUKTUR</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"> 
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">STRUKTUR</li>
                </ol>
                </div>
        </div>
    </div>
</section>

<!-- Main Content --> 
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Struktur</h3>
                        <div class="text-right">
                            <a href="{{url('struktur/create')}}" class="btn btn-sm btn-success mb-1">Tambah Data </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                   <th> NO</th>
                                   <th> ID UKM </th>
                                   <th> NAMA STRUKTUR </th>
                                   <th> NAMA LEVEL </th>
                                   <th> SUB LEVEL </th>
                                   <th colspan="2"> AKSI </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no=1;   
                               @endphp
                                @foreach ($struktur as $struktur)
                                <tr>
                                    <td>{{$no++}} </td>
                                    <td>{{$struktur->id_ukm}}</td>
                                    <td>{{$struktur->nama_struktur}}</td>
                                    <td>{{$struktur->level}} </td>
                                    <td>{{$struktur->sub_level}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{url("struktur/{$struktur->id_struktur}/edit")}}">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="{{url("struktur/{$struktur->id_struktur}")}}" method="post">
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