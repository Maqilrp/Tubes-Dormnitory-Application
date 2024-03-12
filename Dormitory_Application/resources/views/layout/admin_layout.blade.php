<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    {{-- //bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/sidebars.css')}}">
    <script src="{{asset('js/sidebars.js')}}"></script>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/957ee295f3.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="{{asset('css/navbar.css')}}"> --}}

    {{-- home card, jumbotron css --}}
    <link rel="stylesheet" href="{{asset('css/mycard.css')}}">

    {{-- aos scroll --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(function() {
            AOS.init();
          });
    </script>

</head>
<body>
    <div class="container-fluid m-0 p-0" style="height:100%">
        <div class="row m-0" style="">
          <div class="col p-0">
            <header class="p-3 mb-0 border-bottom" style="background-color: #4475F2;">
                <div class="container">
                  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                      <li style="display: flex;"><img src="{{asset('image/logofestra 1.png')}}" alt="" srcset="" style="width: 55px"><a href="{{url('/')}}" class="nav-link px-2 link-secondary">Festra</a></li>
                      {{-- <li><a href="{{url('home')}}" class="nav-link px-2 link-body-emphasis">Home</a></li>
                      <li><a href="{{url('about')}}" class="nav-link px-2 link-body-emphasis">About</a></li>
                      <li><a href="{{url('admin')}}" class="nav-link px-2 link-body-emphasis">Admin</a></li>
                      <li><a href="#" class="nav-link px-2 link-body-emphasis">Products</a></li> --}}
                    </ul>

                    {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                      <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form> --}}

                    <div class="dropdown text-end">
                      <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="User Photo Profile" width="32" height="32" class="rounded-circle">
                        {{-- src="https://github.com/mdo.png" --}}
                      </a>
                      <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="{{url('profile_user')}}">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </header>
          </div>
        </div>

        {{-- row 2 --}}
        <div class="row m-0" style="display: flexbox; width:100%; height:100vh">
            {{-- col 1 --}}
            <div class="col-2" style="background-color: #EEEFF4">
                <div class="b-example-divider b-example-vr"></div>

                <div class="flex-shrink-0 p-3" style="width: 280px;">
                    <a href="{{url('admin')}}" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                    <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-5 fw-semibold">Admin Menu</span>
                    </a>
                    <ul class="list-unstyled ps-0">
                        {{-- home --}}
                    {{-- <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        Home
                        </button>
                        <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li>
                        </ul>
                        </div>
                    </li> --}}

                    {{-- Dashboard --}}
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Dashboard
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{url('admin')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                            {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li> --}}
                        </ul>
                        </div>
                    </li>
                    {{-- end Dashboard --}}

                    {{-- users --}}
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#users-collapse" aria-expanded="false">
                        Users
                        </button>
                        <div class="collapse" id="users-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{url('admin/users')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Data</a></li>
                            {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li> --}}
                        </ul>
                        </div>
                    </li>
                    {{-- end users --}}

                    {{-- gedung --}}
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#gedung-collapse" aria-expanded="false">
                        Gedung
                        </button>
                        <div class="collapse" id="gedung-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{url('admin/gedung')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Data</a></li>
                            {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li> --}}
                        </ul>
                        </div>
                    </li>
                    {{-- end perizinan --}}

                    {{-- perizinan --}}
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#perizinan-collapse" aria-expanded="false">
                        Perizinan
                        </button>
                        <div class="collapse" id="perizinan-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{url('admin/perizinan')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Data</a></li>
                            {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li> --}}
                        </ul>
                        </div>
                    </li>
                    {{-- end perizinan --}}

                    {{-- laundry --}}
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#laundry-collapse" aria-expanded="false">
                        Laundry
                        </button>
                        <div class="collapse" id="laundry-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{url('admin/laundry')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Data</a></li>
                            {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li> --}}
                        </ul>
                        </div>
                    </li>
                    {{-- end Laundry --}}

                    {{-- air minum --}}
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#air_minum-collapse" aria-expanded="false">
                        Air Minum
                        </button>
                        <div class="collapse" id="air_minum-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{url('admin/air_minum')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Data</a></li>
                            {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li> --}}
                        </ul>
                        </div>
                    </li>
                    {{-- end Air Minum --}}

                    {{-- Listrik --}}
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#listrik-collapse" aria-expanded="false">
                        Listrik
                        </button>
                        <div class="collapse" id="listrik-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{url('admin/listrik')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Data</a></li>
                            {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li> --}}
                        </ul>
                        </div>
                    </li>
                    {{-- end Listrik --}}

                    {{-- paket --}}
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#paket-collapse" aria-expanded="false">
                        Paket
                        </button>
                        <div class="collapse" id="paket-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{url('admin/paket')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Data</a></li>
                            {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li> --}}
                        </ul>
                        </div>
                    </li>
                    {{-- end paket --}}

                    {{-- histori --}}
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#histori-collapse" aria-expanded="false">
                        Histori
                        </button>
                        <div class="collapse" id="histori-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="{{url('admin/histori')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Data</a></li>
                            {{-- <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li> --}}
                        </ul>
                        </div>
                    </li>
                    {{-- end Histori --}}

                    {{-- account --}}
                    {{-- <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                        </button>
                        <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
                        </ul>
                        </div>
                    </li> --}}
                    </ul>
                </div>
            </div>
            {{-- end col 1 --}}

            {{-- col 2 --}}
            <div class="col p-0" style="background-color: #F4F5F7">
                <div class="row m-0">
                    <div class="col">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        {{-- end row  2  --}}
    </div>
</body>
</html>
