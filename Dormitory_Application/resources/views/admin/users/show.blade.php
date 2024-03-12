@extends('layout.admin_layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User</h1>
    <!-- DataTales  -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Data Table User</h6>
            <a style="margin-top: 2%" href="{{ url('admin/users') }}" class="float-right btn btn-success btn-sm">View Data</a>
        </div>
        <div class="card-body">
            @if (session()->has('sukses'))
                <p class="text-success">{{ session('sukses') }}</p>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>NIM</th>
                            <th>Nomor Telephone</th>
                            <th>Foto</th>
                            <th>Level</th>
                            <th>ID Gedung</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>NIM</th>
                            <th>Nomor Telephone</th>
                            <th>Foto</th>
                            <th>Level</th>
                            <th>ID Gedung</th>
                            <th>Password</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->nim }}</td>
                            <td>{{ $data->no_telp }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$data->foto) }}" width="50" height="50" class="img img-responsive" alt="">
                            </td>
                            <td>{{ $data->level }}</td>
                            <td>{{ $data->id_gedung }}</td>
                            <td style="columns:auto 50vh;">{{ $data->password }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
