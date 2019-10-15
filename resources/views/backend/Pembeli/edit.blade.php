@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
              <div class="card">
                  <div class="card-header">Mengubah Data Pembeli</div>
              <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">No Ktp Pembeli</label>
                    <input type="text" name="no_ktp_pembeli" id="" class="form-control" aria-describedby="helpId" value="{{$pembeli->no_ktp_pembeli}}">
                </div>
                <div class="form-group">
                    <label for="">Nama Pembeli</label>
                    <textarea name="nama_pembeli" id="texteditor" cols="30" row="5" class="form-control">{{$pembeli->nama_pembeli}}</textarea>
                </div>
                <div class="form-group">
                        <label for="">Alamat Pembeli</label>
                        <textarea name="alamat_pembeli" id="texteditor" cols="30" row="5" class="form-control">{{$pembeli->alamat_pembeli}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Telpon Pembeli</label>
                        <textarea name="telpon_pembeli" id="texteditor" cols="30" row="5" class="form-control">{{$pembeli->telpon_pembeli}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Pembeli Hp</label>
                        <textarea name="pembeli_hp" id="texteditor" cols="30" row="5" class="form-control">{{$pembeli->pembeli_hp}}</textarea>
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