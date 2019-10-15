@extends('layouts.backend')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Pembeli</h5><br>
                <center>
                        <a href="{{ route('pembeli.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating ">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Ktp Pembeli</th>
                                <th>Nama Pembeli</th>
                                <th>Alamat Pembeli</th>
                                <th>Telpon Pembeli</th>
                                <th>Pembeli Hp</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                @php $no =1; @endphp
                @foreach($pembeli as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->no_ktp_pembeli }}</td>
                    <td>{{ $data->nama_pembeli }}</td>
                    <td>{{ $data->alamat_pembeli }}</td>
                    <td>{{ $data->telpon_pembeli }}</td>
                    <td>{{ $data->pembeli_hp }}</td>

                    <td><a href="{{ route('pembeli.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('pembeli.show', $data->id) }}" class="btn btn-success">Show</a></td>
                    <td><form action="{{ route('pembeli.destroy', $data->id) }}" method="post">
                    {{ csrf_field() }}  
                    <input type="hidden" name="_method" value="DELETE">
                        <button type=="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </tbody>
            </div>
        </div>
    </div>
</div>
@endsection