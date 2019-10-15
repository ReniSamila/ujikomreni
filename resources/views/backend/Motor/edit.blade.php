@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
              <div class="card">
                  <div class="card-header">Mengubah Data Motor</div>
              <form action="{{ route('motor.update', $motor->id) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Motor Kode</label>
                    <input type="text" name="motor_kode" id="" class="form-control" aria-describedby="helpId" value="{{$motor->motor_kode}}">
                </div>
                <div class="form-group">
                    <label for="">Motor Merk</label>
                    <textarea name="motor_merk" id="texteditor" cols="30" row="5" class="form-control">{{$motor->motor_merk}}</textarea>
                </div>
                <div class="form-group">
                        <label for="">Motor Type</label>
                        <textarea name="motor_type" id="texteditor" cols="30" row="5" class="form-control">{{$motor->motor_type}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Motor Warna</label>
                        <textarea name="motor_warna_pilihan" id="texteditor" cols="30" row="5" class="form-control">{{$motor->motor_warna_pilihan}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Motor Harga</label>
                        <textarea name="motor_harga" id="texteditor" cols="30" row="5" class="form-control">{{$motor->motor_harga}}</textarea>
                    </div>
                <div class="form-group">
                        <label for="">Motor Gambar</label>
                        <input type="file" name="motor_gambar" id="motor_gambar" class="form-control">
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