@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Beli Kridit</div>
                <br>
                <center><a href="{{ route('belikridit.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>No Ktp</th>
                                <th>Kode Paket</th>
                                <th>Kode Motor</th>
                                <th>Tanggal Kridit</th>
                                <th>Fotokopi Ktp</th>
                                <th>Fotokopi Kk</th>
                                <th>Fotokopi Slip Gaji</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($belikridit as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->kode }}</td>
                    <td>{{ $data->no_ktp }}</td>
                    <td>{{ $data->kode_paket }}</td>
                    <td>{{ $data->kode_motor }}</td>
                    <td>{{ $data->tanggal_kridit }}</td>
                    <td>{{ $data->fotokopi_ktp }}</td>
                    <td>{{ $data->fotokopi_kk }}</td>
                    <td>{{ $data->fotokopi_slip_gaji }}</td>

                    <td><a href="{{ route('belikridit.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('belikridit.show', $data->id) }}" class="btn btn-success">Show</a></td>
                    <td><form action="{{ route('belikridit.destroy', $data->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type=="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection