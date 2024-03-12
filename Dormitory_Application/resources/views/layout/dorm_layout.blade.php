<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/957ee295f3.js" crossorigin="anonymous"></script>

    {{-- aos scroll --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $(function() {
            AOS.init();
          });
    </script>

    {{-- home card, jumbotron css --}}
    <link rel="stylesheet" href="{{asset('css/mycard.css')}}">

</head>
  <body>
    <header class="p-3 mb-0 border-bottom" style="background-color: #4475F2;">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li style="display: flex;"><img src="{{asset('image/logofestra 1.png')}}" alt="" srcset="" style="width: 55px"><a href="{{url('/')}}" class="nav-link px-2 link-secondary">Festra</a></li>
              <li><a href="{{url('home')}}" class="nav-link px-2 link-body-emphasis">Home</a></li>
              <li><a href="{{url('about')}}" class="nav-link px-2 link-body-emphasis">About</a></li>
              {{-- <li><a href="#" class="nav-link px-2 link-body-emphasis">Products</a></li> --}}
            </ul>

            {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form> --}}

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('storage/' . auth()->user()->foto) }}" alt="User Photo Profile" width="62" height="62" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li>
                        {{-- <a class="dropdown-item" href="{{ url('/profile_user/{id}') }}">Profile</a> --}}
                        <a class="dropdown-item" href="{{ route('profile_user.edit', ['id' => auth()->user()->id]) }}">Edit Profile</a>
                    </li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item">Log Out</button>
                    </form>
                  </li>
                </ul>
              </div>
          </div>
        </div>
      </header>

    <main style="background-color: #EEEFF4">

        @yield('content')
    </main>
    <footer class="footer fixed-bottom py-3 bg-body-tertiary" style="background-color:#D9E3FC; text-align:center;">
        <div class="container">
          <span class="text-body-secondary">© 2023 Festra.</span>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Moment.js -->
<script src="{{asset('js/moment.min.js')}}"></script>
<!-- Datetimepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
  $(function () {
    $('#datetimepicker').datetimepicker({
      format: 'YYYY-MM-DD HH:mm:ss'
    });
  });
</script>

</body>
</html>
