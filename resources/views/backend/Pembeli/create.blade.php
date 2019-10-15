@extends('layouts.backend')
@section('content')

<div class="container">
	<div class="row">
	  <div class="col col-lg-11">
		  <form action="{{ route('pembeli.store') }}" method="post" enctype="multipart/form-data">
		  @csrf

		                <div class="form-group">
			            <label class="control-label col-lg-4">No Ktp Pembeli</label>
			            <div class="col-lg-4">
				            <input type="text" name="no_ktp_pembeli" autofocus required class="form-control" />
			            </div>		
						<div class="form-group">
						<label class="control-label col-lg-4">Nama Pembeli</label>
						<div class="col-lg-4">
                            <input type="text" name="nama_pembeli" autofocus required class="form-control" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat Pembeli</label>
							<div class="col-lg-4">
								<input type="text" required name="alamat_pembeli" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Telpon Pembeli</label>
							<div class="col-lg-4">
								<input type="text" required name="telpon_pembeli" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Pembeli Hp</label>
							<div class="col-lg-4">
								<input type="text" required name="pembeli_hp" class="form-control" />
							</div>
						</div>
						<button type="submit" name="Simpan"class="btn btn-md btn-info">
							Simpan Data
						</button>
							&nbsp <input type="kembali" value="Kembali" class="btn btn-warning" onclick=self.history.back()>
                        </div>
                    </form>
	</div>
</div>
</html>
@endsection