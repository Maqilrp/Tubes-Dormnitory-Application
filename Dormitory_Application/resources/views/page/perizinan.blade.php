@include('layout.dorm_layout')
<div class="container">
    <div class="row">
      <div class="col" >
        <div class="content" style="margin-top:4%;">
            <div class="bg-form" style="height:20%; width:45%; margin-left:30%; background-color:#EEEFF4; border-radius:20px;">
                <div style=" height:20%; width:85%; margin-left:10%; padding:20px">
                    <h1 >Perizinan</h1>
                    <hr>
                    <form action="{{url('/perizinan/create/'. $user->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        {{-- ID input --}}
                        <label for="id_user" class="form-label" hidden>ID</label>
                        <div class="input-group mb-3" hidden>
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" hidden class="form-control" name="id_user" id="id_user" aria-describedby="emailHelp" value="{{ auth()->user()->id }}">
                        </div>
                        {{-- ID input --}}

                        {{-- nama input --}}
                        <label for="nama" class="form-label">Nama</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" readonly class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="{{ auth()->user()->nama }}" value="">
                        </div>
                        {{-- nama input --}}

                        {{-- NIM input --}}
                        <label for="nim" class="form-label">NIM</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-sharp fa-solid fa-id-card"></i></span>
                            <input type="text" readonly class="form-control" name="nim" id="nim"  placeholder="{{ auth()->user()->nim }}" value="">
                        </div>
                        {{-- end NIM input --}}

                        {{-- nomor gedung, kamar, dan jenis perizinan label wrapper --}}
                        <div class="mb-3 d-flex" style="justify-content: space-between;">
                            <label for="noGedung" class="form-label">Nomor Gedung & Nomor Kamar</label>
                            {{-- <label for="nokamar" class="form-label">Nomor Kamar</label> --}}
                            <label for="jenisPerizinan" class="form-label">Jenis Perizinan</label>
                        </div>
                        {{-- end nomor gedung, kamar, dan jenis perizinan label wrapper --}}

                        {{-- nomor gedung, kamar, dan jenis perizinan wrapper --}}
                        <div class="mb-3 d-flex" style="justify-content:space-around;">

                            {{-- nomor gedung select --}}
                            <div class="input-group" style="width:75%">
                                <span class="input-group-text"><i class="fa-solid fa-building"></i></span>

                                <select class="form-select" aria-label="Default select example" style="margin-right:10px;" name="" disabled>
                                    {{-- <option selected>Nomor Gedung & Nomor Kamar</option> --}}
                                    @foreach($gedung as $gedungValue)
                                        <option value="{{ $gedungValue->id }}" {{ auth()->user()->id_gedung == $gedungValue->id_gedung ? 'selected' : '' }}>
                                            {{ $gedungValue->Deskripsi }}
                                        </option>
                                    @endforeach
                                </select>
                                <select class="form-select" aria-label="Default select example" style="margin-right:10px;" name="id_gedung" hidden>
                                    {{-- <option selected>Nomor Gedung & Nomor Kamar</option> --}}
                                    @foreach($gedung as $gedungValue)
                                        <option value="{{ $gedungValue->id }}" {{ auth()->user()->id_gedung == $gedungValue->id_gedung ? 'selected' : '' }}>
                                            {{ $gedungValue->Deskripsi }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- end nomor gedung select --}}

                            {{-- nomor Kamar select --}}
                            {{-- <div class="input-group" style="width: 33,3%" >
                                <span class="input-group-text"><i class="fa-solid fa-bed"></i></span>
                                <select class="form-select" aria-label="Default select example" style="" name="noKamar" id="noKamar">
                                    <option selected>Nomor Kamar</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div> --}}
                             {{-- end nomor Kamar select --}}

                              {{-- jenis perizinan select --}}
                            <div class="input-group" style=" width:25%">
                                <span class="input-group-text"><i class="fa-solid fa-book-bookmark"></i></span>
                                <select class="form-select" aria-label="Default select example" style="" name="jenis_perizinan" id="jenis_perizinan">
                                  <option selected>Jenis Perizinan</option>
                                  <option value="Telat Balik">Telat Balik</option>
                                  <option value="Tidak Balik">Tidak Balik</option>
                                  <option value="Gojek">Gojek</option>
                                </select>
                            </div>
                            {{-- end jenis perizinan select --}}

                        </div>
                        {{-- end nomor gedung, kamar, dan jenis perizinan wrapper --}}

                        {{-- tanggal dan waktu input --}}
                        <label for="tanggalWaktu">Tanggal dan Waktu:</label>
                        <div class="form-group">
                            <div class="input-group " id="">
                                <div class="input-group-text" style="height: 100%"><i class="fa fa-calendar"></i></div>
                                <input type="datetime-local" class="form-control " name="tanggal_waktu" >
                            </div>
                          </div>
                        {{-- end tanggal dan waktu input --}}

                        {{-- alasan input --}}
                        <label for="alasan" class="form-label">Alasan</label>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Alasan ..." name="alasan" id="alasan" ></textarea>
                            <label for="alasan">Alasan</label>
                          </div>
                        {{-- alasan input --}}

                        {{-- <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div> --}}

                        <hr>

                        {{-- button wrapper --}}
                        <div style="display: flex; justify-content:space-between;">
                            <div style="text-align: left;">
                                <a href="{{url('/home')}}" class="btn btn-danger">Kembali</a>
                            </div>
                            <div style="text-align: right;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        {{-- button wrapper --}}

                      </form>

                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<br><br><br><br>
