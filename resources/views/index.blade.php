@extends('layout.app1')
@section('title','$title')

@section('content')
    <!--==========================
      Booking Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Booking Service</h2>
          <p>Ingin service motor YAMAHA kesayangan Anda? tapi khawatir antrian panjang?
          	<br>
			Tenang! sekarang Anda bisa Booking service di <strong>YAMAHA BISMA</strong> lo, buruan Booking sekarang! 
			<br>
		    <strong>
			<i style="color: red;">Booking Service Melayani :</i>
			    <br>
			<ul>
			    <li>KSG</li>
			    <li>Service Ringan</li>
			    <li>Ganti Oli</li>
			</ul>
			</strong>
          </p>
          <br>
          <center><h3><strong>PILIH DEALER :</strong></h3></center>
        </div>

        <div class="row service-content">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h4 class="title">BISMA MANDIRI</h4>
              <p class="description">Jl. Teuku Umar Barat No. 100X Malboro, Denpasar</p>
              <p>(0361) 490690</p>
              <br>
              <form action="{{ URL('tanggal') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" name="lokasi" value="Bisma Mandiri">
                <input type="hidden" name="dealer_kode" value="AA0107">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h4 class="title">BISMA HASANUDDIN</h4>
              <p class="description">Jl. Hasanuddin No.74, Pemecutan, Denpasar</p>
              <p>(0361) 422660</p>
              <br>
              <form action="{{ URL('tanggal') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" name="lokasi" value="Bisma Hasanuddin">
                <input type="hidden" name="dealer_kode" value="AA0104">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>

        </div>
        
        <div class="row service-content">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h4 class="title">BISMA BMM COKRO</h4>
              <p class="description">Jl. Cokroaminoto No.78, Pemecutan Kaja, Denpasar</p>
              <p>(0361) 434775</p>
              <br>
              <form action="{{ URL('tanggal') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" name="lokasi" value="Bisma BMM">
                <input type="hidden" name="dealer_kode" value="AA0102">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h4 class="title">BISMA TTS GATSU</h4>
              <p class="description">JL. Jend Gatot Subroto Tengah No. 21-X, Denpasar</p>
              <p>(0361) 410535</p>
              <br>
              <form action="{{ URL('tanggal') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" name="lokasi" value="Bisma TTS">
                <input type="hidden" name="dealer_kode" value="AA0105">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>

        </div>
        
        <div class="row service-content">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h4 class="title">BISMA WR SUPRATMAN</h4>
              <p class="description">Jl. WR Supratman No.76, Sumerta, Denpasar</p>
              <p>(0361) 243056</p>
              <br>
              <form action="{{ URL('tanggal') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" name="lokasi" value="Bisma WR Supratman">
                <input type="hidden" name="dealer_kode" value="AA0108">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-map-marker"></i></div>
              <h4 class="title">BISMA SUNSET ROAD</h4>
              <p class="description">Jl. Sunset Road No.162, Legian, Kuta, Kabupaten Badung</p>
              <p>(0361) 758140</p>
              <br>
              <form action="{{ URL('tanggal') }}" method="GET">
                {{ csrf_field() }}
                <input type="hidden" name="lokasi" value="Bisma Sunset Road">
                <input type="hidden" name="dealer_kode" value="AA0109">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->
@endsection