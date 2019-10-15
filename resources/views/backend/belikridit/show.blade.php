@extends('layouts.backend')
@section('content')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Menampilkan Data Beli Kridit</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Kode</label>
                            <input class="form-control" value="{{ $belikridit->kode }}" type="text" name="kode" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">No Ktp</label>
                            <input class="form-control" value="{{ $belikridit->no_ktp }}" type="text" name="no_ktp" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Kode Paket</label>
                            <input class="form-control" value="{{ $belikridit->kode_paket }}" type="text" name="kode_paket" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Kode Motor</label>
                            <input class="form-control" value="{{ $belikridit->kode_motor }}" type="text" name="kode_motor" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Kridit</label>
                            <input class="form-control" value="{{ $belikridit->tanggal_kridit }}" type="text" name="tanggal_kridit" readonly>
                            </div>

                        <div class="form-group">
                            <label for="">Fotokopi Ktp</label>
                            <input class="form-control" value="{{ $belikridit->fotokopi_ktp }}" type="text" name="fotokopi_ktp" readonly>
                            </div>

                        <div class="form-group">
                            <label for="">Fotokopi Kk</label>
                            <input class="form-control" value="{{ $belikridit->fotokopi_kk }}" type="text" name="fotokopi_kk" readonly>
                            </div>

                        <div class="form-group">
                            <label for="">Fotokopi Slip Gaji</label>
                            <input class="form-control" value="{{ $belikridit->fotokopi_slip_gaji }}" type="text" name="fotokopi_slip_gaji" readonly>
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