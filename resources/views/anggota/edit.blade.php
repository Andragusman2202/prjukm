@extends('layouts.app')

@section('anggota')
<!--Content Header(Page Number)-->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ANGGOTA</h1>
            </div>
            <div class="col-sm-6">
                <ol class="braedcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Anggota</li>    
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
                            <a href="{{url("anggota")}}" class="btn btn-sm btn-success mb-1">Lihat Data Anggota</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 ">
                                 <form action="{{url("/anggota/{$anggota->id_anggota}")}}" method="post">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label for="id_ukm">ID UKM :</label>
                                        <input value="{{$anggota->id_ukm}}" class="form-control" placeholder="Masukkan id_ukm" type="text" name="id_ukm">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="id_struktur">ID Struktur :</label>
                                        <input value="{{$anggota->id_struktur}}"class="form-control" placeholder="Masukkan id struktur" type="text" name="id_struktur">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="nama_anggota">Nama Anggota :</label>
                                        <input value="{{$anggota->nama_anggota}}"class="form-control" placeholder="Masukkan nama Anggota" type="text" name="nama_anggota">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_masuk">Tanggal Masuk :</label>
                                        <input value="{{$anggota->tgl_masuk}}"class="form-control" placeholder="Masukkan tgl masuk" type="date" name="tgl_masuk">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_keluar">Tanggal Keluar :</label>
                                        <input value="{{$anggota->tgl_keluar}}"class="form-control" placeholder="Masukkan tgl keluar" type="date" name="tgl_keluar">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="status">Status :</label>
                                        <div class="col-md-13">
                                            <select id="status" name="status" class="form-control form-control-sm" onchange="status(this)" aria-label="Pilih">
                                                <option value="0">Aktif</option>
                                                <option value="1">Tidak Aktif</option>
                                              </select>
                                        </div>
                                        {{-- <input value="{{$anggota->status}}"class="form-control" placeholder="Masukkan status" type="text" name="status"> --}}
                                    </div>
                                    <div class="form-group"> 
                                        <label for="alasan_keluar">Alasan Keluar :</label>
                                        <input value="{{$anggota->alasan_keluar}}"class="form-control" placeholder="Masukkan Alasan Keluar" type="text" name="alasan_keluar">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
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