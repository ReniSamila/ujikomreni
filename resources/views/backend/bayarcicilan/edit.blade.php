@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
              <div class="card">
                  <div class="card-header">Mengubah Data Beli Cash</div>
              <form action="{{ route('bayarcicilan.update', $bayarcicilan->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" name="kode" id="" class="form-control" aria-describedby="helpId" value="{{$bayarcicilan->kode}}">
                </div>
                <div class="form-group">
                    <label for="">Kode Kridit</label>
                    <textarea name="kode_kridit" id="texteditor" cols="30" row="5" class="form-control">{{$bayarcicilan->kode_kridit}}</textarea>
                </div>
                <div class="form-group">
                        <label for="">Tanggal Cicilan</label>
                        <textarea name="tanggal_cicilan" id="texteditor" cols="30" row="5" class="form-control">{{$bayarcicilan->tanggal_cicilan}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Jumlah Cicilan</label>
                        <textarea name="jumlah_cicilan" id="texteditor" cols="30" row="5" class="form-control">{{$bayarcicilan->jumlah_cicilan}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Cicilan Ke</label>
                        <textarea name="cicilan_ke" id="texteditor" cols="30" row="5" class="form-control">{{$bayarcicilan->cicilan_ke}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Cicilan Sisa Ke</label>
                        <textarea name="cicilan_sisa_ke" id="texteditor" cols="30" row="5" class="form-control">{{$bayarcicilan->cicilan_sisa_ke}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Cicilan Sisa Harga</label>
                        <textarea name="cicilan_sisa_harga" id="texteditor" cols="30" row="5" class="form-control">{{$bayarcicilan->cicilan_sisa_harga}}</textarea>
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