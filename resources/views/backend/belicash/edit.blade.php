@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
              <div class="card">
                  <div class="card-header">Mengubah Data Beli Cash</div>
              <form action="{{ route('belicash.update', $belicash->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" name="kode" id="" class="form-control" aria-describedby="helpId" value="{{$belicash->kode}}">
                </div>
                <div class="form-group">
                    <label for="">No Ktp</label>
                    <textarea name="no_ktp" id="texteditor" cols="30" row="5" class="form-control">{{$belicash->no_ktp}}</textarea>
                </div>
                <div class="form-group">
                        <label for="">Kode Motor</label>
                        <textarea name="kode_motor" id="texteditor" cols="30" row="5" class="form-control">{{$belicash->kode_motor}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Tanggal Cash</label>
                        <textarea name="tanggal_cash" id="texteditor" cols="30" row="5" class="form-control">{{$belicash->tanggal_cash}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Bayar Cash</label>
                        <textarea name="bayar_cash" id="texteditor" cols="30" row="5" class="form-control">{{$belicash->bayar_cash}}</textarea>
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