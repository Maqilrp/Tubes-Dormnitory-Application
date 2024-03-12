@include('layout.dorm_layout')

<script>
    $(function() {
        AOS.init();
      });
</script>

{{-- content --}}
<div class="container text-center " style="justify-content: center; position:relative;" >

    {{-- header --}}
    <div style="margin: 3%">
        <h1>Histori</h1>
    </div>
    <div style="margin-left: 1%; margin-right: 1%;">
        <hr>
    </div>
    {{-- end header --}}

    {{-- wrapper --}}
    <div style="margin-left: 10%; margin-right:10%">
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
                    <div class="" style="padding:10%">
                        <h5 class="">Perizinan</h5>
                        <p class="card-content-text" style="">Users dapat menggunakan fitur ini untuk menguruskan perizinan di area asrama. </p>
                        <hr style="border-bottom:3px solid #ccc">
                        <div style="text-align: right">
                            <a href="{{url('histori/perizinan')}}" class="btn btn-primary">Go Perizinan</a>
                        </div>
                    </div>
                </div>
              </div>
          </div>
          {{-- end perizinan --}}

      </div>
      {{-- end row 1 --}}

      {{-- row 2 --}}
      <div class="row" style="  display:flex; margin-top:5%" data-aos="fade-right" data-aos-duration="1500">
      {{-- laundry --}}
      <div class="col" style="">
        <div class="containercard" style="">
            <div>
                <img src="{{asset('image/047999800_1487357530-rumah-sehat_Steam_Laundry_Menurunkan_Risiko_Penyakit_Kulit 1.png')}}" class="card-image" alt="...">
            </div>
            <div class="card-content">
                <div style="padding:10%">
                    <h5 class="">Laundry</h5>
                    <p class="card-content-text">Fitur ini digunakan untuk informasi pengambilan harga dan jangka waktu.</p>
                    <hr>
                    <div style="text-align: right">
                        <a href="{{url('histori/laundry')}}" class="btn btn-primary">Go Laundry</a>
                    </div>
                </div>
            </div>
          </div>
      </div>
      {{-- end laundry --}}
      </div>
      {{-- end row 2 --}}

        {{-- row 3 --}}
        <div class="row" style="display:flex; margin-top:5%;" data-aos="fade-left" data-aos-duration="1500">

          {{-- air minum --}}
          <div class="col" style="">
            <div class="containercard" style="">
                <div>
                    <img src="{{asset('image/cara-memilih-air-kemasan-yang-baik 1.png')}}" class="card-image" alt="...">
                </div>
                <div class="card-content">
                  <div style="padding:10%">
                      <h5 class="">Air Minum</h5>
                      <p class="card-content-text">Fitur ini membantu penghuni asrama agar dapat layanan pengantaran dan pengambilan air minum.</p>
                      <hr>
                      <div style="text-align: right">
                          <a href="{{url('histori/air_minum')}}" class="btn btn-primary">Go Air Minum</a>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          {{-- end air minum --}}
      </div>
      {{-- end row 3 --}}

      {{-- row 4 --}}
      {{-- listrik --}}
      <div class="row" style="display:flex; margin-top:5%;" data-aos="fade-left" data-aos-duration="1500">
      <div class="col" style="">
        <div class="containercard" style="">
            <div>
                <img src="{{asset('image/instalasi-listrik.width-800 1.png')}}" class="card-image" alt="...">
            </div>
            <div class="card-content">
              <div style="padding:10%">
                  <h5 class="">Listrik</h5>
                  <p class="card-content-text">Membantu pengguna untuk mengecek dan membeli token dan layanan listrik asrama.</p>
                  <hr>
                  <div style="text-align: right">
                      <a href="{{url('histori/listrik')}}" class="btn btn-primary">Go Listrik</a>
                  </div>
                </div>
              </div>
          </div>
      </div>
      {{-- end listrik --}}
      </div>
      {{-- end row 4 --}}

        {{-- row 5 --}}
        <div class="row"  style="  display:flex; margin-top:5%" data-aos="zoom-in" data-aos-duration="1500">

          {{-- paket --}}
          <div class="col" style="">
            <div class="containercard" style="">
                <div>
                    <img src="{{asset('image/Frame-2-1-update 1.png')}}" class="card-image" alt="...">
                </div>
                <div class="card-content">
                  <div style="padding:10%">
                      <h5 class="">Paket</h5>
                      <p class="card-content-text">Informasi pelayanan paket barang untuk mempermudah users serta meminimalisir kehilangan.</p>
                      <hr>
                      <div style="text-align: right">
                          <a href="{{url('histori/paket')}}" class="btn btn-primary">Go Paket</a>
                      </div>
                  </div>
                </div>
              </div>
          </div>
          {{-- end paket --}}

          {{-- histori --}}
          {{-- <div class="col" style="">
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
          </div> --}}
          {{-- end histori --}}

        </div>
         {{-- end row 5 --}}
    </div>

  </div>
  {{-- end content wrapper --}}
  <br><br><br><br><br>
