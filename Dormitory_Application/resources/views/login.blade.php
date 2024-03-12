<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{-- External CSS --}}
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/957ee295f3.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
</head>
<body>

<section>
    {{-- container --}}
    <div class="container-fluid ">

        {{-- left column --}}
        <div class="row">
            <div class="col bg-primary " style="background-image: url({{asset('image/asrama-780x470.jpeg.jpg')}}); background-repeat: no-repeat;
              background-size: cover; ">
                <div class="row justify-content-center align-items-center h-100">
                    <h1 style="text-shadow: 1px 2px white;">Selamat Datang Di Dormnitory Application</h1>
                </div>
            </div>
            {{-- end left column --}}

            {{-- right column --}}
            <div class="col-4" style="background-color: #4475F2">
                <div class="row justify-content-center align-items-center h-100" style="background-color: white; border-radius: 550px 0px; box-shadow: 5px 10px grey;">

                    <form action="{{route('login')}}" method="POST">
                        @csrf

                        {{-- form header --}}
                        <div class="mb-3 h-50">
                            {{-- validate --}}
                            @if ($errors)
                            @foreach ($errors->all() as $error)
                                <p class="text-danger" style="columns:auto 50vh; ">{{ $error }}</p>
                            @endforeach
                                @endif
                            {{-- /validate --}}
                                @if (session()->has('sukses'))
                                <p class="text-success">{{ session('sukses') }}</p>
                             @endif
                            <h1>
                                Login
                            </h1>
                            <h4>
                                Selamat Datang
                            </h4>
                        </div>
                        {{-- end form header --}}

                        {{-- email address input --}}
                        <label for="email" class="form-label">Email address</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-regular fa-at"></i></span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@gmail.com">
                        </div>
                        {{-- end email address input --}}

                        {{-- password input --}}
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        {{-- end password input --}}

                        {{-- remember me checkbox --}}
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                        {{-- end remember me checkbox --}}

                        {{-- login button --}}
                        <button type="submit" class="btn btn-primary" style="width:100%"> Login</button>
                        {{-- end login button --}}

                        {{-- register link --}}
                        <div class="mb-3" style="text-align: center;">
                            <a href="{{url('register')}}" style="color: #4475F2 ;">Register Now</a>
                        </div>
                        {{-- end register link --}}
                    </form>
                </div>
            </div>
            {{-- endright column --}}
        </div>
        {{-- end row --}}
    </div>
    {{-- end container --}}
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
