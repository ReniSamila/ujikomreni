@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Bayar Cicilan</div>
                <br>
                <center><a href="{{ route('bayarcicilan.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>kode</th>
                                <th>Kode Kridit</th>
                                <th>Tanggal Cicilan</th>
                                <th>Jumlah Cicilan</th>
                                <th>Cicilan Ke</th>
                                <th>Cicilan Sisa Ke</th>
                                <th>Cicilan Sisa Harga</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($bayarcicilan as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->kode }}</td>
                    <td>{{ $data->kode_kridit }}</td>
                    <td>{{ $data->tanggal_cicilan }}</td>
                    <td>{{ $data->jumlah_cicilan }}</td>
                    <td>{{ $data->cicilan_ke }}</td>
                    <td>{{ $data->cicilan_sisa_ke }}</td>
                    <td>{{ $data->cicilan_sisa_harga }}</td>

                    <td><a href="{{ route('bayarcicilan.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('bayarcicilan.show', $data->id) }}" class="btn btn-success">Show</a></td>
                    <td><form action="{{ route('bayarcicilan.destroy', $data->id) }}" method="post">
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