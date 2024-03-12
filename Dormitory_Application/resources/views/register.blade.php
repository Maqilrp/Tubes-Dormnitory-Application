<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- external css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/957ee295f3.js" crossorigin="anonymous"></script>

    <title>Bootstrap demo</title>
</head>
  <body  style="background-image: url({{asset('image/asrama-780x470.jpeg.jpg')}}); background-repeat: no-repeat;
  background-size: cover; margin:0px;  filter: blur(0px);">
    <div class="container">
        <div class="row">
          <div class="col" style="" >
            <div class="content" style="">
                <div class="bg-form" style="height:20%; width:45%; margin-left:30%; background-color:#EEEFF4; border-radius:20px;">

                    {{-- card --}}
                    <div style=" height:20%; width:80%; margin-left:10%; padding:20px">

                        {{-- header --}}
                        <h1 >Register</h1>
                        {{-- end header --}}
                        <!-- /resources/views/post/create.blade.php -->

                        {{-- <h1>Create Post</h1> --}}

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Create Post Form -->
                        <div>
                        <hr>
                        <form action="{{route('register.submit')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- nama input --}}
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <div class="input-group mb-3">
                                <div class="input-group-text" style=""><i class="fa fa-user"></i></div>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex : Nama Lengkap">
                            </div>
                            {{-- end nama input --}}

                            {{-- email address input --}}
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-regular fa-at"></i></span>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex : name@gmail.com">
                            </div>
                            {{-- end email address input --}}

                            {{-- NIM input --}}
                            <label for="exampleInputPassword1" class="form-label">NIM</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-sharp fa-solid fa-id-card"></i></span>
                                <input type="text" name="nim" class="form-control" id="exampleInputPassword1" placeholder="Ex : 6706123321">
                            </div>
                            {{-- end NIM input --}}

                            {{-- nomor telephone input --}}
                            <label for="exampleInputPassword1" class="form-label">Nomor Telephone</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                                <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" placeholder="Ex : 081-xxxx-xxxx">
                            </div>
                            {{-- end nomor telephone input --}}

                            {{-- gambar input --}}
                        <label for="formFile" class="form-label">Foto Mahasiswa/i</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text" style=""><i class="fa-solid fa-file-image"></i></div>
                            <input class="form-control" type="file" name="foto" id="formFile">
                          </div>
                        {{-- end gambar input --}}

                            {{-- nomor gedung & nomor kamar label wrapper --}}
                            <div class="d-flex" style=";">
                                <label for="exampleInputEmail1" class="form-label">Nomor Gedung & Nomor Kamar</label><br>
                                {{-- <label for="nomorKamar" class="form-label">Nomor Kamar</label><br> --}}
                            </div>
                            {{-- end nomor gedung & nomor kamar label wrapper --}}

                            {{-- nomor gedung & nomor kamar select wrapper --}}
                            <div class="mb-3 d-flex" style="justify-content: space-between;">

                                {{-- nomor gedung select --}}
                                <div class="input-group"  style="">
                                    <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                                    <select class="form-select" name="id_gedung" aria-label="Default select example" style="margin-right:10px;">
                                        <option value="0">Nomor Gedung dan Nomor Kamar</option>
                                       @foreach ($gedung as $gedungValue1)
                                       <option value="{{$gedungValue1 -> id}}" aria-placeholder="">{{$gedungValue1 -> Deskripsi}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                {{-- end nomor gedung select --}}

                                {{-- nomor kamar select --}}
                                {{-- <div class="input-group" style="">
                                    <span class="input-group-text"><i class="fa-solid fa-bed"></i></span>
                                    <select class="form-select" name="no_kamar" aria-label="Default select example" style="">
                                        <option value="0">Nomor Kamar</option>
                                        @foreach ($gedung as $gedungValue2)
                                        <option value="{{$gedungValue2 -> id}}">{{$gedungValue2 -> no_kamar}}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                {{-- end nomor kamar select --}}
                            </div>
                            {{-- end nomor gedung & nomor kamar select wrapper --}}

                            {{-- password input --}}
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                            </div>
                            {{-- end password input --}}

                            {{-- konfirmasi password input --}}
                            {{-- <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm New Password">
                            </div> --}}
                            {{-- end konfirmasi password input --}}

                            {{-- kembali & submit button wrapper --}}
                            <hr>
                        </div>

                            <div style="display: flex; justify-content:space-between;">

                                {{-- kembali button --}}
                                <div style="text-align: left;">
                                    <a href="{{url('/')}}" class="btn btn-danger">Kembali</a>
                                </div>
                                {{-- end kembali button --}}

                                {{-- submit button --}}
                                <div style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                {{-- end submit button --}}

                            </div>
                            {{-- end kembali & submit button wrapper --}}

                        </form>
                    </div>
                    {{-- end card --}}

                </div>
            </div>

        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
