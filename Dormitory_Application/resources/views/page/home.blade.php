@include('layout.dorm_layout')

{{-- aos extra script --}}
<script>
    $(function() {
        AOS.init();
      });
</script>
{{-- endaos extra script --}}

{{-- jumbotron --}}
{{-- <link rel="stylesheet" href="{{asset('css/movingBgJumbotron.css')}}">
<div class="p-5 mb-4 moving">
    <div class="container-fluid py-5"  >
        <h1 class="display-5 fw-bold">Mempermudah Hidup Di Asrama</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <a href="{{url('profil_asrama')}}" class="btn btn-light btn-lg">Profil Asrama</a>
        <a href="{{url('aturan_asrama')}}" class="btn btn-primary btn-lg">Aturan Asrama</a>
    </div>
    <div class="moving-bg" style="background-image: url({{asset('image/gambarasrama.png')}})">
    </div>
</div> --}}


{{-- jumbotron --}}
<div class="jumbotron p-5 mb-4 bg-body-tertiary rounded-0" style=" background-image: url('{{asset('image/gambarasrama.png')}}'); background-repeat: no-repeat;
background-size: 100%, 0px; ">
    <div class="container-fluid py-5"  >
      <h1 class="display-5 fw-bold">Mempermudah Hidup Di Asrama</h1>
      <div style="text-align: justify; margin-top:1%; margin-bottom:1%">
          <p class="col-md-8 fs-4">Aplikasi ini hadir untuk memberikan solusi terhadap segala masalah dan persoalan keperluan asrama yang diantaranya ialah membantu para penghuni asrama untuk berkomunikasi dengan SR (Senior Resindence), helpdesk, dan satpam. Serta menawarkan pembelian token listrik, laundry pakaian, pembelian galon, pengambilan paket, dan mengurus surat izin.
            .</p>
      </div>
      <div style="">
          <a href="{{url('profil_asrama')}}" class="btn btn-light btn-lg" style="margin-right: 2%">Profil Asrama</a>
          <a href="{{url('aturan_asrama')}}" class="btn btn-primary btn-lg">Aturan Asrama</a>
      </div>
    </div>
</div>
{{-- end jumbotron --}}

{{-- content --}}
<div class="container text-center " style="justify-content: center; position:relative;" >

  {{-- header --}}
  <div style="margin:3%">
      <h1>Apa Yang Anda Butuhkan ?</h1>
  </div>
  <hr>
  {{-- end header --}}

    {{-- row 1 --}}
    <div class="row" style="  display:flex; margin-top:5%" data-aos="fade-right" data-aos-duration="1500">

      {{-- perizinan --}}
      <div class="col" style="">
        {{-- belum dirapihin --}}
        <div class="containercard">
          <div>
            <img class="card-image" src="{{asset('image/627ca783a74d9 1.png')}}" alt="...">
          </div>
            <div class="card-content" style="">
                <div class="">
                    <h5 class="">Perizinan</h5>
                    <p class="card-content-text" style="">Users dapat menggunakan fitur ini untuk menguruskan perizinan di area asrama. </p>
                    <hr style="border-bottom:3px solid #ccc">
                    <a href="{{ route('perizinan.form', ['id' => auth()->user()->id]) }}" class="btn btn-primary">Go Perizinan</a>
                </div>
            </div>
          </div>
      </div>
      {{-- end perizinan --}}

      {{-- laundry --}}
      <div class="col" style="">
        <div class="containercard" style="">
            <div>
                <img src="{{asset('image/047999800_1487357530-rumah-sehat_Steam_Laundry_Menurunkan_Risiko_Penyakit_Kulit 1.png')}}" class="card-image" alt="...">
            </div>
            <div class="card-content">
                <div>
                    <h5 class="">Laundry</h5>
                    <p class="card-content-text">Fitur ini digunakan untuk informasi pengambilan harga dan jangka waktu.</p>
                    <hr>
                    <a href="{{ route('laundry.form', ['id' => auth()->user()->id]) }}" class="btn btn-primary">Go Laundry</a>
                </div>
            </div>
          </div>
      </div>
      {{-- end laundry --}}

    </div>
    {{-- end row 1 --}}

    {{-- row 2 --}}
    <div class="row" style="display:flex; margin-top:5%;" data-aos="fade-left" data-aos-duration="1500">

      {{-- air minum --}}
      <div class="col" style="">
        <div class="containercard" style="">
            <div>
                <img src="{{asset('image/cara-memilih-air-kemasan-yang-baik 1.png')}}" class="card-image" alt="...">
            </div>
            <div class="card-content">
              <h5 class="">Air Minum</h5>
              <p class="card-content-text">Fitur ini membantu penghuni asrama agar dapat layanan pengantaran dan pengambilan air minum.</p>
              <hr>
              <a href="{{ route('airMinum.form', ['id' => auth()->user()->id]) }}" class="btn btn-primary">Go Air Minum</a>
            </div>
          </div>
      </div>
      {{-- end air minum --}}

      {{-- listrik --}}
      <div class="col" style="">
        <div class="containercard" style="">
            <div>
                <img src="{{asset('image/instalasi-listrik.width-800 1.png')}}" class="card-image" alt="...">
            </div>
            <div class="card-content">
              <h5 class="">Listrik</h5>
              <p class="card-content-text">Membantu pengguna untuk mengecek dan membeli token dan layanan listrik asrama.</p>
              <hr>
              <a href="{{ route('listrik.form', ['id' => auth()->user()->id]) }}" class="btn btn-primary">Go Listrik</a>
            </div>
          </div>
      </div>
      {{-- end listrik --}}

    </div>
    {{-- end row 2 --}}

    {{-- row 3 --}}
    <div class="row"  style="  display:flex; margin-top:5%" data-aos="zoom-in" data-aos-duration="1500">

      {{-- paket --}}
      <div class="col" style="">
        <div class="containercard" style="">
            <div>
                <img src="{{asset('image/Frame-2-1-update 1.png')}}" class="card-image" alt="...">
            </div>
            <div class="card-content">
              <h5 class="">Paket</h5>
              <p class="card-content-text">Informasi pelayanan paket barang untuk mempermudah users serta meminimalisir kehilangan.</p>
              <hr>
              <a href="{{ route('paket.form', ['id' => auth()->user()->id]) }}" class="btn btn-primary">Go Paket</a>
            </div>
          </div>
      </div>
      {{-- end paket --}}

      {{-- histori --}}
      <div class="col" style="">
        <div class="containercard" style=";">
            <div>
                <img src="{{asset('image/history 1.png')}}" class="card-image" alt="...">
            </div>
            <div class="card-content">
              <h5 class="">Histori</h5>
              <p class="card-content-text">Histori dari semua perizinan (perizinan, listrik, laundry).</p>
              <hr>
              <a href="{{url('histori')}}" class="btn btn-primary">Go Histori</a>
            </div>
          </div>
      </div>
      {{-- end histori --}}

    </div>
     {{-- end row 3 --}}

</div>
{{-- end content wrapper --}}
<br><br><br><br><br>


{{-- <div class="asramaimg p-4 p-md-5 mb-4  text-bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Mempermudah Hidup Di Asrama</h1>
        <p class="lead my-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates praesentium reiciendis molestiae quisquam animi dolor, sed maxime saepe dolores dicta rerum! Fugit at aut earum minus, officiis repellendus possimus fugiat.
        .</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
</div> --}}


    {{-- end row 1 --}}
    {{-- <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
      </div>
  </div> --}}
