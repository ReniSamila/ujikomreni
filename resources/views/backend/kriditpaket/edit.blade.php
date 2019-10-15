@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
              <div class="card">
                  <div class="card-header">Mengubah Data Kridit Paket</div>
              <form action="{{ route('kriditpaket.update', $kriditpaket->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" name="kode" id="" class="form-control" aria-describedby="helpId" value="{{$kriditpaket->kode}}">
                </div>
                <div class="form-group">
                    <label for="">Harga Cash</label>
                    <textarea name="harga_cash" id="texteditor" cols="30" row="5" class="form-control">{{$kriditpaket->harga_cash}}</textarea>
                </div>
                <div class="form-group">
                        <label for="">Uang Muka</label>
                        <textarea name="uang_muka" id="texteditor" cols="30" row="5" class="form-control">{{$kriditpaket->uang_muka}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Jumlah Cicilan</label>
                        <textarea name="jumlah_cicilan" id="texteditor" cols="30" row="5" class="form-control">{{$kriditpaket->jumlah_cicilan}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Paket Bunga</label>
                        <textarea name="paket_bunga" id="texteditor" cols="30" row="5" class="form-control">{{$kriditpaket->paket_bunga}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Nilai Cicilan</label>
                        <textarea name="nilai_cicilan" id="texteditor" cols="30" row="5" class="form-control">{{$kriditpaket->nilai_cicilan}}</textarea>
                    </div>
                <div class="form-group">
                <button type="submit" name="Simpan"class="btn btn-md btn-info">
                    Simpan Data
                </button>
            </div>
            <div class="form-group">
                &nbsp <input type="kembali" value="Kembali" class="btn btn-warning" onclick=self.history.back()>
        </form>
</div>
</div>
</html>
@endsection