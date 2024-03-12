@extends('layout.admin_layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User</h1>


    <!-- DataTales  -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Table User</h6>
            <a href="{{ url('admin/users/create') }}" class="float-right btn btn-success btn-sm" style="margin-top:2%">Add New Data</a>
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
                          {{-- <th>Password</th> --}}
                          <th class="non">aksi</th>
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
                          {{-- <th>Password</th> --}}
                          <th class="non">aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if ($data)
                        @foreach ($data as $d)
                            <tr>
                            <td>{{ $d -> id }}</td>
                            <td>{{ $d -> nama }}</td>
                            <td>{{ $d -> email }}</td>
                            <td>{{ $d -> nim }}</td>
                            <td>{{ $d -> no_telp }}</td>
                            {{-- foto --}}
                            <td>
                                <img src="{{ asset('storage/'.$d->foto) }}" width="50" height="50" class="img img-responsive" alt="">
                            </td>
                            <td>{{ $d -> level }}</td>
                            <td>{{ $d -> id_gedung }}</td>
                            <td>
                                <a href="{{ url('admin/users/'.$d -> id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"> | Info</i></a>
                                <a href="{{ url('admin/users/'.$d -> id).'/edit' }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"> | Edit</i></a>
                                <a onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini')" href="{{ url('admin/users/'.$d -> id).'/delete' }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"> | Hapus</i></a>

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
