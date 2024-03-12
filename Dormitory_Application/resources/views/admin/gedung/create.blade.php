@extends('layout.admin_layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Gedung</h1>


  <!-- DataTales  -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Create Data Gedung</h6>
          <a href="{{ url('admin/gedung') }}" class="float-right btn btn-success btn-sm " style="margin-top: 2%">View Data</a>
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
                <form action="{{ url('admin/gedung') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <table id="" class="table table-bordered table-striped">
                    {{-- no gedung --}}
                    <tr>
                      <th>
                        <label for="no_gedung" class="form-label float-left" >NO Gedung<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="select2-purple">
                          <select name="no_gedung" class="select2" data-placeholder="Level" data-dropdown-css-class="select2-purple" style="width: 100%;">
                              <option value="">-</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                          </select>
                        </div>
                    </td>
                    </tr>
                    {{-- no kamar --}}
                    <tr>
                      <th>
                        <label for="no_kamar" class="form-label float-left" >NO Kamar<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="select2-purple">
                          <select name="no_kamar" class="select2" data-placeholder="Level" data-dropdown-css-class="select2-purple" style="width: 100%;">
                              <option value="">-</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                          </select>
                        </div>
                    </td>
                    </tr>
                    {{-- Deskripsi --}}
                    <tr>
                      <th>
                        <label for="deskripsi" class="form-label float-left" >Deskripsi<span class="text-danger">*</span></label>
                      </th>
                      <td>
                        <div class="form-floating mb-1">
                          <input type="text" name="deskripsi" id="#" class="form-control" placeholder="Gedung (no_gedung) - Kamar (no_kamar)">
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
