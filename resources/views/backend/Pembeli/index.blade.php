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
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($pembeli as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->no_ktp_pembeli }}</td>
                                <td>{{ $data->nama_pembeli }}</td>
                                <td>{{ $data->alamat_pembeli }}</td>
                                <td>{{ $data->telpon_pembeli }}</td>
                                <td>{{ $data->pembeli_hp }}</td>
                                <td style="text-align: center;">
                                    <form action="{{route('pembeli.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
                                    <a href="{{route('pembeli.edit', $data->id)}}"
                                        class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating "> Edit
                                    </a>
                                    <a href="{{route('pembeli.show', $data->id) }}"
                                        class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating "> Show
                                    </a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger "> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection