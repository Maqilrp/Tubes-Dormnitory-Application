@extends('layout.admin_layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Gedung</h1>


    <!-- DataTables  -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Edit Data Gedung</h6>
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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <form action="{{ url('admin/gedung/'.$data -> id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <table id="" class="table table-bordered table-striped">
                        {{--  No gedung--}}
                        <tr>
                          <th>
                            <label for="no_gedung" class="form-label float-left" >NO Gedung</label>
                          </th>
                          <td>
                            <div class="form-floating mb-1">
                                <input value="{{ $data -> no_gedung }}" type="text" name="no_kamar" id="#" class="form-control" placeholder="Nomor Kamar">
                            </div>

                                    {{-- @foreach ($data as $gedungValue)
                                  <option @if ($gedungValue->no_gedung == $data)
                                      selected  @endif value="{{ $gedungValue -> no_gedung }}"
                                  >{{ $gedungValue -> Deskripsi  }}</option>
                                @endforeach --}}
                                {{-- @if (is_array($data) && !empty($data))
                                {{-- @foreach ($data as $gedungValue)
                                    <option value="{{ $gedungValue->no_gedung }}" @if ($gedungValue->no_gedung == $data) selected @endif>
                                        {{ $gedungValue->Deskripsi }}
                                    </option>
                                @endforeach
                            @endif --}}
                                </select>
                              </div>
                          </td>
                        </tr>
                        {{-- No kamar --}}
                        <tr>
                            <th>
                              <label for="no_kamar" class="form-label float-left" >NO Kamar</label>
                            </th>
                            <td>
                                <div class="form-floating mb-1">
                                    <input value="{{ $data -> no_kamar }}" type="text" name="no_kamar" id="#" class="form-control" placeholder="Nomor Kamar">
                                  </div>
                                {{-- <div class="select2-purple">
                                  <select name="no_kamar" class="select2" data-placeholder="Level" data-dropdown-css-class="select2-purple" style="width: 100%;"> --}}
                                    {{-- @if (is_array($data))
                                        @foreach ($data as $gedungValue)
                                            <option value="{{ $gedungValue->no_kamar }}" @if ($gedungValue->no_kamar == $data) selected @endif>
                                                {{ $gedungValue->Deskripsi }}
                                            </option>
                                        @endforeach
                                    @endif --}}

                                    {{-- @foreach ($data as $gedungValue)
                                        <option value="{{ $gedungValue->no_kamar }}" @if ($gedungValue->no_kamar == $data) selected @endif>
                                            {{ $gedungValue->Deskripsi }}
                                        </option>
                                    @endforeach --}}
                                  </select>
                                </div>
                            </td>
                          </tr>
                        {{-- NIM --}}
                        <tr>
                          <th>
                            <label for="deskripsi" class="form-label float-left" >Deskripsi</label>
                          </th>
                          <td>
                            <div class="form-floating mb-1">
                              <input value="{{ $data -> Deskripsi }}" type="text" name="deskripsi" id="#" class="form-control" placeholder="Deskripsi">
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
                </table>
            </div>
        </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@endsection
