@extends('layouts.app')

@section('content')

<!-- content Header (Page NUmber) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ANGGOTA</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
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
                        <h3 class="card-title">Tambah Data Anggota</h3>
                        <div class="text-right">
                            <a href="{{url("anggota")}}" class="btn btn-sm btn-success mb-1">Lihat data Anggota</a>
                        </div>
                    </div>
                    <!--Cars Header-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10 ">
                                 <form action="{{url("/anggota")}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="id_ukm">ID UKM :</label>
                                        <input class="form-control" placeholder="Masukkan ID UKM" type="text" name="id_ukm">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_struktur">ID STRUKTUR :</label>
                                        <input class="form-control" placeholder="Masukkan Struktur" type="text" name="id_struktur">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_anggota">NAMA ANGGGOTA :</label>
                                        <input class="form-control" placeholder="Masukkan Anggota" type="text" name="nama_anggota">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_masuk">Tanggal Masuk :</label>
                                        <input class="form-control" placeholder="Masukkan Tanggal Masuk" type="date" name="tgl_masuk">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_keluar">Tanggal Keluar :</label>
                                        <input class="form-control" placeholder="Masukkan Tanggal Keluar" type="date" name="tgl_keluar">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status :</label>
                                        <div class="col-md-13">
                                            <select id="status" name="status" class="form-control form-control-sm" onchange="status(this)" aria-label="Pilih">
                                                <option value="0">Aktif</option>
                                                <option value="1">Tidak Aktif</option>
                                              </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alasan_keluar">Alasan Keluar :</label>
                                        <input class="form-control" placeholder="Masukkan Alasan Keluar" type="text" name="alasan_keluar">
                                    </div>
                                    <button type="submit" class="btn btn-primary">SAVE</button>
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