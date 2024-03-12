@include('layout.dorm_layout')

<div class="container">
    <div class="row">
        <div class="col">
            <div style="margin: 5%; margin-bottom: -10%;  text-align:center" >
                <img src="{{ asset('storage/' . auth()->user()->foto) }}" alt="" srcset="" style="width:25%; height:100%; border-radius: 100%; border:1px solid #ccc; box-shadow:0 0 20px rgba(0, 0, 0, 0.5);">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div style="margin-top: 10%; margin-bottom: 10%; margin-left: 20%; margin-right: 20%;">


                <form action="{{ url('profile_user/update/'. $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    {{-- email address input --}}
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-regular fa-at"></i></span>
                        <input type="email" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex : name@gmail.com" name="email" value="{{ auth()->user()->email }}">
                    </div>
                    {{-- end email address input --}}

                    {{-- nama input --}}
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text" style=""><i class="fa fa-user"></i></div>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex : Nama Lengkap" value="{{ auth()->user()->nama }}">
                    </div>
                    {{-- end nama input --}}

                    {{-- NIM input --}}
                    <label for="exampleInputPassword1" class="form-label">NIM</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-sharp fa-solid fa-id-card"></i></span>
                        <input type="text"  class="form-control" id="exampleInputPassword1" placeholder="Ex : 6706123321" name="nim" value="{{ auth()->user()->nim }}">
                    </div>
                    {{-- end NIM input --}}

                    {{-- nomor telephone input --}}
                    <label for="exampleInputPassword1" class="form-label">Nomor Telephone</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ex : 081-xxxx-xxxx" name="no_telp" value="{{ auth()->user()->no_telp }}">
                    </div>
                    {{-- end nomor telephone input --}}

                    {{-- gambar input --}}
                    <label for="formFile" class="form-label">Foto Mahasiswa/i</label>
                    <div class="input-group mb-3">
                        <div class="input-group-text" style=""><i class="fa-solid fa-file-image"></i></div>
                        <input class="form-control" type="file" id="formFile" name="foto">
                        <!-- Hidden Field for Current Photo -->
                        <input type="hidden" name="current_photo" value="{{ auth()->user()->foto }}">
                    </div>
                    {{-- end gambar input --}}

                    {{-- nomor gedung & nomor kamar label wrapper --}}
                    <div class="d-flex" style=" ">
                        <label for="exampleInputEmail1" class="form-label">Nomor Gedung & Nomor Kamar</label><br>
                        {{-- <label for="nomorKamar" class="form-label">Nomor Kamar</label><br> --}}
                    </div>
                    {{-- end nomor gedung & nomor kamar label wrapper --}}

                    {{-- nomor gedung & nomor kamar select wrapper --}}
                    <div class="mb-3 d-flex" style="justify-content: space-between;">

                        {{-- nomor gedung select --}}
                        <div class="input-group" style="">
                            <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                            <select class="form-select" aria-label="Default select example" style="margin-right:10px;" name="id_gedung">
                                {{-- <option selected>Nomor Gedung & Nomor Kamar</option> --}}
                                @foreach($gedung as $gedungValue)
                                <option value="{{ $gedungValue->id }}" {{ auth()->user()->id_gedung == $gedungValue->id ? 'selected' : '' }}>
                                    {{ $gedungValue->Deskripsi }}
                                </option>

                                @endforeach
                            </select>
                        </div>
                        {{-- end nomor gedung select --}}

                        {{-- nomor kamar select --}}
                        {{-- <div class="input-group" style="">
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
                    {{-- end nomor gedung & nomor kamar select wrapper --}}


                    {{-- kembali & submit button wrapper --}}
                    <div style="margin-top: 5%">
                        <hr>
                    </div>

                    <div style="display: flex; justify-content:space-between; margin-top:7%; margin-left:20%; margin-right:20%;">

                        {{-- kembali button --}}
                        <div style="text-align: left;">
                            <a href="{{ url('/home') }}" class="btn btn-danger">Kembali</a>
                        </div>
                        {{-- end kembali button --}}

                        {{-- submit button --}}
                        <div style="text-align: right;">
                            <button type="submit" class="btn btn-primary">Update Profil</button>
                        </div>
                        {{-- end submit button --}}

                    </div>
                    {{-- end kembali & submit button wrapper --}}

                </form>
                {{-- Add dd() after the update process --}}
                @if(session('status'))
                @dd(session('status'))
                @endif
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
</div>
