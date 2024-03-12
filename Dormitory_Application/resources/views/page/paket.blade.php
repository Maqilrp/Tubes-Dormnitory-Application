@include('layout.dorm_layout')
<div class="container">
    <div class="row">
        <div class="col" >
            <div class="content" style="margin-top:4%;">

                <div class="bg-form" style="height:20%; width:45%; margin-left:30%; background-color:#EEEFF4; border-radius:20px;">

                {{-- form wrapper --}}
                <div style=" height:20%; width:85%; margin-left:10%; padding:20px">
                    <div style="text-align: right">
                        <a href="{{url('laundry/pengaduan_paket/'. $user->id)}}" class="btn btn-primary">Pengaduan Paket</a>
                    </div>
                    {{-- header --}}
                    <h1 >Penerima</h1>
                    <hr>
                    {{-- end header --}}

                    <form action="{{url('/paket/create/'. $user->id)}}" method="POST" enctype="multipart/form-data">
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
                            {{-- <label for="jenisPerizinan" class="form-label">Atur Jadwal</label> --}}
                        </div>
                        {{-- end nomor gedung, kamar, dan jenis perizinan label wrapper --}}

                        {{-- nomor gedung, kamar, dan jenis perizinan wrapper --}}
                        <div class="mb-3 d-flex" style="justify-content:space-around;">

                            {{-- nomor gedung select --}}
                            <div class="input-group" style="width:100%">
                                <span class="input-group-text"><i class="fa-solid fa-building"></i></span>

                                <select class="form-select" aria-label="Default select example" style="" name="" disabled>
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

                            {{-- nomor kamar select --}}
                            {{-- <div class="input-group" style="width:50%">
                                <span class="input-group-text"><i class="fa-solid fa-bed"></i></span>
                                <select class="form-select" aria-label="Default select example" style="">
                                    <option selected>Nomor Kamar</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div> --}}
                            {{-- end nomor kamar select --}}

                        </div>
                        {{-- end nomor gedung, kamar, dan jumlah galon  wrapper --}}

                        <br>
                        <hr>
                        <br>

                        {{-- header --}}
                        <h1 >Identitas Barang</h1>
                        {{-- end header --}}

                        {{-- nama input --}}
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text" style=""><i class="fa fa-user"></i></div>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex : Nama Lengkap" name="nama_penerima">
                        </div>
                        {{-- end nama input --}

                        {{-- gambar input --}}
                        <label for="formFile" class="form-label">Bukti Gambar</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text" style=""><i class="fa-solid fa-file-image"></i></div>
                            <input class="form-control" type="file" id="formFile" name="foto_bukti">
                          </div>
                        {{-- end gambar input --}}

                        {{-- nomor telephone input --}}
                        <label for="exampleInputPassword1" class="form-label">Nomor Telephone</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ex : 081-xxxx-xxxx" name="no_telp">
                        </div>
                        {{-- end nomor telephone input --}}

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
                        <div style="display: flex; justify-content:space-between; margin-top:5%">
                            <div style="text-align: left;">
                                <a href="{{url('/home')}}" class="btn btn-danger">Kembali</a>
                            </div>
                            <div style="text-align: right;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        {{-- end button wrapper --}}

                    </form>
                </div>
                {{-- form wrapper --}}
            </div>
        </div>
        </div>
    </div>
</div>
<br><br><br><br>
