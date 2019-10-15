@extends('layouts.backend')
@section('content')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Menampilkan Data Bayar Cicilan</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Kode</label>
                            <input class="form-control" value="{{ $bayarcicilan->kode }}" type="text" name="kode" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Kode Kridit</label>
                            <input class="form-control" value="{{ $bayarcicilan->kode_kridit }}" type="text" name="kode_kridit" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Tanggal Cicilan</label>
                            <input class="form-control" value="{{ $bayarcicilan->tanggal_cicilan }}" type="text" name="tanggal_cicilan" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Jumlah Cicilan</label>
                            <input class="form-control" value="{{ $bayarcicilan->jumlah_cicilan }}" type="text" name="jumlah_cicilan" readonly>
                        </div>

                        <div class="form-group">
                                <label for="">Cicilan Ke</label>
                                <input class="form-control" value="{{ $bayarcicilan->cicilan_ke }}" type="text" name="cicilan_ke" readonly>
                            </div>

                        <div class="form-group">
                                <label for="">Cicilan Sisa Ke</label>
                                <input class="form-control" value="{{ $bayarcicilan->cicilan_sisa_ke }}" type="text" name="cicilan_sisa_ke" readonly>
                            </div>

                        <div class="form-group">
                                <label for="">Cicilan Sisa Harga</label>
                                <input class="form-control" value="{{ $bayarcicilan->cicilan_sisa_harga }}" type="text" name="cicilan_sisa_harga" readonly>
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