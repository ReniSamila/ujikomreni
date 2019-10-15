@extends('layouts.backend')
@section('content')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Menampilkan Data Pembeli</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">No Ktp Pembeli</label>
                            <input class="form-control" value="{{ $pembeli->no_ktp_pembeli }}" type="text" name="no_ktp_pembeli" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input class="form-control" value="{{ $pembeli->nama_pembeli }}" type="text" name="nama_pembeli" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat Pembeli</label>
                            <input class="form-control" value="{{ $pembeli->alamat_pembeli }}" type="text" name="alamat_pembeli" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Telpon Pembeli</label>
                            <input class="form-control" value="{{ $pembeli->telpon_pembeli }}" type="text" name="telpon_pembeli" readonly>
                        </div>

                        <div class="form-group">
                                <label for="">Pembeli Hp</label>
                                <input class="form-control" value="{{ $pembeli->pembeli_hp }}" type="text" name="pembeli_hp" readonly>
                            </div>

                        <div class="form-group">
                            &nbsp <input type="kembali" value="Kembali" class="btn btn-warning" onclick=self.history.back()>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection