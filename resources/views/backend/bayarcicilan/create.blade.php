@extends('layouts.backend')
@section('content')

<div class="container">
	<div class="row">
	  <div class="col col-lg-11">
		  <form action="{{ route('bayarcicilan.store') }}" method="post" enctype="multipart/form-data">
		  @csrf

		                <div class="form-group">
			            <label class="control-label col-lg-4">Kode</label>
			            <div class="col-lg-4">
				            <input type="text" name="kode" autofocus required class="form-control" />
			            </div>		
						<div class="form-group">
						<label class="control-label col-lg-4">Kode Kridit</label>
						<div class="col-lg-4">
                            <input type="text" name="kode_kridit" autofocus required class="form-control" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Tanggal Cicilan</label>
							<div class="col-lg-4">
								<input type="date" required name="tanggal_cicilan" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Jumlah Cicilan</label>
							<div class="col-lg-4">
								<input type="text" required name="jumlah_cicilan" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Cicilan Ke</label>
							<div class="col-lg-4">
								<input type="text" required name="cicilan_ke" class="form-control" />
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Cicilan Sisa Ke</label>
							<div class="col-lg-4">
								<input type="text" required name="cicilan_sisa_ke" class="form-control" />
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Cicilan Sisa Harga</label>
							<div class="col-lg-4">
								<input type="text" required name="cicilan_sisa_harga" class="form-control" />
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