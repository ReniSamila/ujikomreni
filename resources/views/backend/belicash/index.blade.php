@extends('layouts.backend')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Beli Cash</h5><br>
                <center>
                        <a href="{{ route('belicash.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating ">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>No Ktp</th>
                                <th>Kode Motor</th>
                                <th>Tanggal Cash</th>
                                <th>Bayar Cash</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($belicash as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->kode }}</td>
                                <td>{{ $data->no_ktp }}</td>
                                <td>{{ $data->motors->motor_kode }}</td>
                                <td>{{ $data->tanggal_cash }}</td>
                                <td>{{ $data->bayar_cash }}</td>
                                <td style="text-align: center;">
                                    <form action="{{route('belicash.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
                                    <a href="{{route('belicash.edit', $data->id)}}"
                                        class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating "> Edit
                                    </a>
                                    <a href="{{route('belicash.show', $data->id) }}"
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