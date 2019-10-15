@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
              <div class="card">
                  <div class="card-header">Mengubah Data Beli Kridit</div>
              <form action="{{ route('belikridit.update', $belikridit->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" name="kode" id="" class="form-control" aria-describedby="helpId" value="{{$belikridit->kode}}">
                </div>
                <div class="form-group">
                    <label for="">No Ktp</label>
                    <textarea name="no_ktp" id="texteditor" cols="30" row="5" class="form-control">{{$belikridit->no_ktp}}</textarea>
                </div>
                <div class="form-group">
                        <label for="">Kode Paket</label>
                        <textarea name="kode_paket" id="texteditor" cols="30" row="5" class="form-control">{{$belikridit->kode_paket}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Kode Motor</label>
                        <textarea name="kode_motor" id="texteditor" cols="30" row="5" class="form-control">{{$belikridit->kode_motor}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Tanggal Kridit</label>
                        <textarea name="tanggal_kridit" id="texteditor" cols="30" row="5" class="form-control">{{$belikridit->tanggal_kridit}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Fotokopi Ktp</label>
                        <textarea name="fotokopi_ktp" id="texteditor" cols="30" row="5" class="form-control">{{$belikridit->fotokopi_ktp}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Fotokopi Kk</label>
                        <textarea name="fotokopi_kk" id="texteditor" cols="30" row="5" class="form-control">{{$belikridit->fotokopi_kk}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Fotokopi Slip Gaji</label>
                        <textarea name="fotokopi_slip_gaji" id="texteditor" cols="30" row="5" class="form-control">{{$belikridit->fotokopi_slip_gaji}}</textarea>
                    </div>
               
                <div class="form-group">
                <button type="submit" name="Simpan"class="btn btn-md btn-info">
                    Simpan Data
                </button>
            </div>
            &nbsp <input type="kembali" value="Kembali" class="btn btn-warning" onclick=self.history.back()>
            </div>
        </form>
</div>
</div>
</html>
@endsection