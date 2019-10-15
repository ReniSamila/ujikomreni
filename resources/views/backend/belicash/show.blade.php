@extends('layouts.backend')
@section('content')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Menampilkan Data Beli Cash</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Kode</label>
                            <input class="form-control" value="{{ $belicash->kode }}" type="text" name="kode" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">No Ktp</label>
                            <input class="form-control" value="{{ $belicash->no_ktp }}" type="text" name="no_ktp" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Kode Motor</label>
                            <input class="form-control" value="{{ $belicash->kode_motor }}" type="text" name="kode_motor" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Cash</label>
                            <input class="form-control" value="{{ $belicash->tanggal_cash }}" type="text" name="tanggal_cash" readonly>
                        </div>

                        <div class="form-group">
                                <label for="">Bayar Cash</label>
                                <input class="form-control" value="{{ $belicash->bayar_cash }}" type="text" name="bayar_cash" readonly>
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