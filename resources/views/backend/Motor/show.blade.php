@extends('layouts.backend')
@section('content')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Menampilkan Data Motor</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Motor Kode</label>
                            <input class="form-control" value="{{ $motor->motor_kode }}" type="text" name="motor_kode" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Motor Merk</label>
                            <input class="form-control" value="{{ $motor->motor_merk }}" type="text" name="motor_merk" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Motor Type</label>
                            <input class="form-control" value="{{ $motor->motor_type }}" type="text" name="motor_type" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Motor Warna</label>
                            <input class="form-control" value="{{ $motor->motor_warna_pilihan }}" type="text" name="motor_warna_pilihan" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Motor Harga</label>
                            <input class="form-control" value="{{ $motor->motor_harga }}" type="text" name="motor_harga" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Motor Gambar</label>
                            <img src="{{ asset('assets/img/motor/'.$motor->motor_gambar)}}" alt=""height="250px" width="250px">
                            <input type="file" class="form-control" name="motor_gambar" disabled>
                        </div>

                        &nbsp <input type="kembali" value="Kembali" class="btn btn-warning" onclick=self.history.back()>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection