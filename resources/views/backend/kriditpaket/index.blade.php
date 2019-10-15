@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Kridit Paket</div>
                <br>
                <center><a href="{{ route('kriditpaket.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Harga Cash</th>
                                <th>Uang Muka</th>
                                <th>Jumlah Cicilan</th>
                                <th>Paket Bunga</th>
                                <th>Nilai Cicilan</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($kriditpaket as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->kode }}</td>
                    <td>{{ $data->harga_cash }}</td>
                    <td>{{ $data->uang_muka }}</td>
                    <td>{{ $data->jumlah_cicilan }}</td>
                    <td>{{ $data->paket_bunga }}</td>
                    <td>{{ $data->nilai_cicilan }}</td>

                    <td><a href="{{ route('kriditpaket.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('kriditpaket.show', $data->id) }}" class="btn btn-success">Show</a></td>
                    <td><form action="{{ route('kriditpaket.destroy', $data->id) }}" method="post">
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