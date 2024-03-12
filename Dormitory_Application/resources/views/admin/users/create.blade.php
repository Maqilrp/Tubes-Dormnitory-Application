@extends('layout.admin_layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">User</h1>


  <!-- DataTales  -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Create Data User</h6>
          <a href="{{ url('admin/users') }}" class="float-right btn btn-success btn-sm " style="margin-top: 2%">View Data</a>
      </div>
      <div class="card-body">
         {{-- validate --}}
        @if ($errors)
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                @endif
        {{-- /validate --}}
        @if (session()->has('sukses'))
          <p class="text-success">{{ session('sukses') }}</p>
        @endif
          <div class="table-responsive">
                <form action="{{ url('admin/users') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <table id="" class="table table-bordered table-striped">
                    {{-- Nama Lengkap --}}
                    <tr>
                      <th>
                        <label for="nm" class="form-label float-left" >Nama Lengkap<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="form-floating mb-1">
                          <input type="text" name="nama" id="#" class="form-control" placeholder="Nama Lengkap">
                        </div>
                      </td>
                    </tr>
                    {{-- Email --}}
                    <tr>
                      <th>
                        <label for="email" class="form-label float-left" >Email<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="form-floating mb-1">
                          <input type="email" name="email" id="#" class="form-control" placeholder="Email">
                        </div>
                      </td>
                    </tr>
                    {{-- Nim --}}
                    <tr>
                      <th>
                        <label for="nim" class="form-label float-left" >NIM<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="form-floating mb-1">
                          <input type="text" name="nim" id="#" class="form-control" placeholder="NIM">
                        </div>
                      </td>
                    </tr>
                    {{-- Nomor Telephone --}}
                    <tr>
                      <th>
                        <label for="no_telp" class="form-label float-left" >Nomor Telephone<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="form-floating mb-1">
                          <input type="text" name="no_telp" id="#" class="form-control" placeholder="Nomor Telephone">
                        </div>
                      </td>
                    </tr>
                    {{-- Foto --}}
                    <tr>
                      <th>
                        <label for="foto" class="form-label float-left" >Foto<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="form-floating mb-1">
                          <input type="file" name="foto" id="floatingnamatipe" class="form-control" placeholder="Foto">
                        </div>
                      </td>
                    </tr>
                    {{-- Level --}}
                    <tr>
                      <th>
                        <label for="level" class="form-label float-left" >Level<span class="text-danger">*</span></label>
                      </th>
                      <td>
                          <div class="select2-purple">
                            <select name="level" class="select2" data-placeholder="Level" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                <option value="">User</option>
                                <option value="admin">Admin</option>
                            </select>
                          </div>
                      </td>
                    </tr>
                    {{-- id gedung --}}
                    <tr>
                      <th>
                        <label for="id_gedung" class="form-label float-left" >ID Gedung<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="select2-purple">
                          <select name="id_gedung" class="select2" data-placeholder="Pilih Nomor Gedung & Nomor Kamar" data-dropdown-css-class="select2-purple" style="width: 100%;">
                            <option  value="0">--- Pilih Nomor Gedung & Nomor Kamar ---</option>
                            @foreach ($gedung as $gedungValue)
                              <option value="{{ $gedungValue -> id }}">{{ $gedungValue -> Deskripsi  }}</option>
                            @endforeach
                          </select>
                        </div>
                      </td>
                      </td>
                    </tr>
                    {{-- Password --}}
                    <tr>
                      <th>
                        <label for="pass" class="form-label float-left" >Password<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="form-floating mb-1">
                          <input type="password" name="password" id="#" class="form-control" placeholder="Password">
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align: right">
                        <input type="submit" name="submit" id="submit" class="float-right btn btn-primary ">
                      </td>
                    </tr>
                  </table>
              </form>
                  </tbody>
          </div>
      </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection
