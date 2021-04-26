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
    </div><!-- /.container-fluid -->
</section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data PRESTASI</h3>
                <div class="text-right">
                    <a href="{{ url("prestasi/create") }}" class="btn btn-sm btn-success mb-1">Tambah Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th> NO</th>
                    <th> ID UKM </th>
                    <th> NAMA PRESTASI </th>
                    <th> PERINGKAT PRESTASI </th>
                    <th> TANGGAL PRESTASI</th>
                    <th colspan="2"> AKSI </th>
                </tr>
                </thead>
                <tbody>
                  @php
                  $no=1;   
                 @endphp
                    @foreach ($prestasi as $prestasis)
                    <tr>
                        <td>{{$no++}} </td>
                        <td>{{$prestasis->id_ukm}}</td> 
                        <td>{{$prestasis->nama_prestasi}} </td>
                        <td>{{$prestasis->peringkat_prestasi}}</td>
                        <td>{{$prestasis->tgl_prestasi}}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{url("prestasi/{$prestasis->id_prestasi}/edit")}}">EDIT</a>
                        </td>
                        <td>
                            <form action="{{url("prestasi/{$prestasis->id_prestasi}")}}" method="post">
                                @csrf
                                @method ('DELETE')
                                <button class="btn btn-sm btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
                {{-- <tfoot>
                    <tr>
                        <th> NO</th>
                        <th> NAMA UKM </th>
                        <th> BIO UKM </th>
                        <th> VISI </th>
                        <th> MISI</th>
                        <th> TANGGAL BERDIRI </th>
                        <th colspan="2"> AKSI </th>
                    </tr>
                </tfoot> --}}
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection