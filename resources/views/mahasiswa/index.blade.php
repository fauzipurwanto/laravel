@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Mahasiswa
                    <a href="{{ route('tambah.mahasiswa') }}" class="btn btn-md btn-danger float-right font-weight-bold ">TAMBAH DATA MAHASISWA</a>
                    @csrf
                </div>

                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>NO.</th>
                                <th>NPM</th>
                                <th>NAMA LENGKAP</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>JENIS KELAMIN</th>
                                <th>TELEPON</th>
                                <th>ALAMAT</th>
                                <th>AKSI</th>
                            </tr>
                            @php
                                $no =1;
                            @endphp
                            @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $mhs->npm }}</td>
                                <td>{{ $mhs->user->name }}</td>
                                <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                                <td>{{ $mhs->gender }}</td>
                                <td>{{ $mhs->telepon }}</td>
                                <td>{{ $mhs->alamat }}</td>
                                <td>
                                    <a href="{{ route('edit.mahasiswa', $mhs->id) }}" class="btn btn-md btn-info font-weight-bold ">EDIT</a>
                                    <a href="{{ route('hapus.mahasiswa', $mhs->id) }}" class="btn btn-md btn-success text-dark font-weight-bold">HAPUS</a>
                                </td>   
                            </tr>
                        
                            @endforeach
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
