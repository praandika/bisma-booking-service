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
        </div>

        <div class="row service-content">
		@foreach($booking as $o)
          <div class="col-lg-12">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-check-square"></i></div>
              <center>
                  <table>
                    <tr>
                      <th>Nama</th>
                      <th>: {{ $o->nama }}</th>
                    </tr>
                    <tr>
                      <th>Nama Dealer</th>
                      <th>: {{ $o->dealer }}</th>
                    </tr>
                    <tr>
                      <th>Tanggal</th>
                      <th>: {{ $o->tanggal }}</th>
                    </tr>
                    <tr>
                      <th>Waktu</th>
                      <th>: {{ $o->waktu }}</th>
                    </tr>
                  </table>
              <br>
                <a href="{{ URL('print',$o->token) }}" role="button" class="btn btn-info custom" target="_blank">Cetak Bukti Booking &nbsp;&nbsp;<i class="fa fa-download"></i></a>
              </center>
            </div>
          </div>
		@endforeach
        </div>

      </div>
    </section><!-- #services -->
@endsection