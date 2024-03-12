@extends('layout.admin_layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Gedung</h1>
    <!-- DataTales  -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Data Table Gedung</h6>
            <a style="margin-top: 2%" href="{{ url('admin/gedung') }}" class="float-right btn btn-success btn-sm">View Data</a>
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
                          <th>NO Kamar</th>
                          <th>NO Kamar</th>
                          <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NO Gedung</th>
                            <th>NO Kamar</th>
                            <th>Deskripsi</th>
                          </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->no_gedung }}</td>
                            <td>{{ $data->no_kamar }}</td>
                            <td>{{ $data->Deskripsi }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
