@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('simpan.mahasiswa') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="" disabled>--Pilih User--</option>
                                        @foreach ($user as $u)
                                            <option value="{{ $u->id }}" >{{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Tambahkan NPM Mahasiswa">
                                </div>

                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahr">
                                </div>
                            </div>              
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir">
                                </div>

                                <div class="col">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="" disabled>--Pilih Jenis Kelamin--</option>
                                        <option value="L" >Laki-laki</option>
                                        <option value="P" >Perempuan</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Tambahkan Nomor Telepon">
                                </div>
                            </div>              
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Alamat</label>
                                    <input type="text-area" name="alamat" class="form-control" placeholder="Tambahkan Alamat">
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary font-weight-bold">SIMPAN</button>
                                    <a href="{{ route('makul') }}" class="btn btn-md btn-danger font-weight-bold">BATAL</a>
                                </div>                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection
