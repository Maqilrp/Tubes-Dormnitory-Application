@extends('layout.admin_layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Perizinan</h1>


    <!-- DataTales  -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Table Perizinan</h6>
            <a href="{{ url('admin/perizinan/create') }}" class="float-right btn btn-success btn-sm" style="margin-top:2%">Add New Data</a>
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
                          <th>User</th>
                          <th>NIM</th>
                          <th>Gedung</th>
                          <th>Jenis Perizinan</th>
                          <th>Tanggal & Waktu</th>
                          <th>Alasan</th>
                          <th class="non">aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                          <th>User</th>
                          <th>NIM</th>
                          <th>Gedung</th>
                          <th>Jenis Perizinan</th>
                          <th>Tanggal & Waktu</th>
                          <th>Alasan</th>
                            <th class="non">aksi</th>
                          </tr>
                    </tfoot>
                    <tbody>
                        @if ($data)
                        @foreach ($data as $d)
                            <tr>
                            <td>{{ $d -> id }}</td>
                            <td>{{ $d -> user->nama }}</td>
                            <td>{{ $d -> user->nim }}</td>
                            <td>{{ $d -> gedung->Deskripsi }}</td>
                            <td>{{ $d -> jenis_perizinan }}</td>
                            <td>{{ $d -> tanggal_waktu }}</td>
                            <td>{{ $d -> alasan }}</td>
                            <td>
                                <a href="{{ url('admin/perizinan/'.$d -> id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"> | Info</i></a>
                                <a href="{{ url('admin/perizinan/'.$d -> id).'/edit' }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"> | Edit</i></a>
                                <a onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini')" href="{{ url('admin/perizinan/'.$d -> id).'/delete' }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"> | Hapus</i></a>

                            </td>
                            </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
