@extends('layouts.backend')
@section('content')

<div class="container">
		<div class="row">
		  <div class="col col-lg-11">
			  <form action="{{ route('belicash.store') }}" method="post" enctype="multipart/form-data">
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
							<label for="">Kode Motor</label>
							<select name="motor_kode" class="form-control">
								@foreach($motor as $data)
							<option value="{{ $data->id}}">
								{{ $data->motor_kode}}
							</option>
							@endforeach
							</select>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Tanggal Cash</label>
							<div class="col-lg-4">
								<input type="date" required name="tanggal_cash" class="form-control" />
							</div>
						</div>
                        <div class="form-group">
							<label class="control-label col-lg-4">Bayar Cash</label>
							<div class="col-lg-4">
								<input type="text" required name="bayar_cash" class="form-control" />
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