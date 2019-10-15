@extends('layouts.backend')
@section('content')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Menampilkan Data Kridit Paket</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Kode</label>
                            <input class="form-control" value="{{ $kriditpaket->kode }}" type="text" name="kode" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Harga Cash</label>
                            <input class="form-control" value="{{ $kriditpaket->harga_cash }}" type="text" name="harga_cash" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Uang Muka</label>
                            <input class="form-control" value="{{ $kriditpaket->uang_muka }}" type="text" name="uang_muka" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Cicilan</label>
                            <input class="form-control" value="{{ $kriditpaket->jumlah_cicilan }}" type="text" name="jumlah_cicilan" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Paket Bunga</label>
                            <input class="form-control" value="{{ $kriditpaket->paket_bunga }}" type="text" name="paket_bunga" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Nilai Cicilan</label>
                            <input class="form-control" value="{{ $kriditpaket->nilai_cicilan }}" type="text" name="nilai_cicilan" readonly>
                        </div>

                        
                        &nbsp <input type="kembali" value="Kembali" class="btn btn-warning" onclick=self.history.back()>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection