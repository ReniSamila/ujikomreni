@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
			  <form action="{{ route('motor.store') }}" method="post" enctype="multipart/form-data">
			  @csrf
						<div class="form-group">
						<label class="control-label col-lg-4">Motor Kode</label>
						<div class="col-lg-4">
                            <input type="text" name="motor_kode" autofocus required class="form-control" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Motor Merk</label>
							<div class="col-lg-4">
								<input type="text" required name="motor_merk" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Motor Type</label>
							<div class="col-lg-4">
								<input type="text" required name="motor_type" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Motor Warna</label>
							<div class="col-lg-4">
								<input type="text" required name="motor_warna_pilihan" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Motor Harga</label>
							<div class="col-lg-4">
								<input type="text" required name="motor_harga" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Motor Gambar</label>
							<div class="col-lg-4">
								<input type="file" required name="motor_gambar" class="form-control" />
							</div>
						</div>
						 <button type="submit" name="Simpan"class="btn btn-md btn-info">
							 Simpan Data
						 </button>
					 </div>
					 <div class="form-group">
						&nbsp <input type="kembali" value="Kembali" class="btn btn-warning" onclick=self.history.back()>
						</div>
                    </form>
	           </div>
            </div>
       
@endsection