@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Beli Cash</div>
                <br>
                <center><a href="{{ route('belicash.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>No Ktp</th>
                                <th>Kode Motor</th>
                                <th>Tanggal Cash</th>
                                <th>Bayar Cash</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($belicash as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->kode }}</td>
                    <td>{{ $data->no_ktp }}</td>
                    <td>{{ $data->motors->motor_kode }}</td>
                    <td>{{ $data->tanggal_cash }}</td>
                    <td>{{ $data->bayar_cash }}</td>

                    <td><a href="{{ route('belicash.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('belicash.show', $data->id) }}" class="btn btn-success">Show</a></td>
                    <td><form action="{{ route('belicash.destroy', $data->id) }}" method="post">
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