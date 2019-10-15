@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
			  <form action="{{ route('kriditpaket.store') }}" method="post" enctype="multipart/form-data">
			  @csrf
						<div class="form-group">
						<label class="control-label col-lg-4">Kode</label>
						<div class="col-lg-4">
                            <input type="text" name="kode" autofocus required class="form-control" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Harga Cash</label>
							<div class="col-lg-4">
								<input type="text" required name="harga_cash" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Uang Muka</label>
							<div class="col-lg-4">
								<input type="text" required name="uang_muka" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Jumlah Cicilan</label>
							<div class="col-lg-4">
								<input type="text" required name="jumlah_cicilan" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Paket Bunga</label>
							<div class="col-lg-4">
								<input type="text" required name="paket_bunga" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Nilai Cicilan</label>
							<div class="col-lg-4">
								<input type="text" required name="nilai_cicilan" class="form-control" />
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