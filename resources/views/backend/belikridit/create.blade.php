@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
			  <form action="{{ route('belikridit.store') }}" method="post" enctype="multipart/form-data">
			  @csrf
						<div class="form-group">
						<label class="control-label col-lg-4">Kode</label>
						<div class="col-lg-4">
                            <input type="text" name="kode" autofocus required class="form-control" />
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">No Ktp</label>
							<div class="col-lg-4">
								<input type="text" required name="no_ktp" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Kode Paket</label>
							<div class="col-lg-4">
								<input type="text" required name="kode_paket" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Kode Motor</label>
							<div class="col-lg-4">
								<input type="text" required name="kode_motor" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Tanggal Kridit</label>
							<div class="col-lg-4">
								<input type="date" required name="tanggal_kridit" class="form-control" />
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Fotokopi Ktp</label>
							<div class="col-lg-4">
								<input type="text" required name="fotokopi_ktp" class="form-control" />
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Fotokopi Kk</label>
							<div class="col-lg-4">
								<input type="text" required name="fotokopi_kk" class="form-control" />
							</div>
                        </div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Fotokopi Slip gaji</label>
							<div class="col-lg-4">
								<input type="text" required name="fotokopi_slip_gaji" class="form-control" />
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