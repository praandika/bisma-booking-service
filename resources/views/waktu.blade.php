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
          <center><h3><strong>PILIH WAKTU SERVICE :</strong></h3></center>
        </div>

        <div class="row service-content">
          @if($w9 >= 3)
          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title" style="color: #C91717;">09.00 | *Full Booked</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="09.00">
                <center><button class="btn btn-info custom" style="background-color: #A9A5A5; color: #E5DEDE;" disabled>Full Booked <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @else
          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title">09.00</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="09.00">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @endif
          @if($w10 >= 3)
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title" style="color: #C91717;">10.00 | *Full Booked</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="10.00">
                <center><button class="btn btn-info custom" style="background-color: #A9A5A5; color: #E5DEDE;" disabled>Full Booked <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @else
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title">10.00</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="10.00">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @endif
          @if($w11 >= 3)
          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title" style="color: #C91717;">11.00 | *Full Booked</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="11.00">
                <center><button class="btn btn-info custom" style="background-color: #A9A5A5; color: #E5DEDE;" disabled>Full Booked <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @else
          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title">11.00</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="11.00">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @endif
          @if($w13 >= 3)
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title" style="color: #C91717;">13.00 | *Full Booked</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="13.00">
                <center><button class="btn btn-info custom" style="background-color: #A9A5A5; color: #E5DEDE;" disabled>Full Booked <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @else
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title">13.00</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="13.00">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @endif
          @if($w14 >= 3)
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title" style="color: #C91717;">14.00 | *Full Booked</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="14.00">
                <center><button class="btn btn-info custom" style="background-color: #A9A5A5; color: #E5DEDE;" disabled>Full Booked <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @else
          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-clock-o"></i></div>
              <h4 class="title">14.00</h4>
              <br>
              <form action="{{ URL('formidentitas') }}" method="GET">
                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                <input type="hidden" name="waktu" value="14.00">
                <center><button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button></center>
              </form>
            </div>
          </div>
          @endif

        </div>

      </div>
    </section><!-- #services -->
@endsection