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
          <center><h3><strong>PILIH TANGGAL SERVICE :</strong></h3></center>
        </div>

        <div class="row service-content">

          <div class="col-lg-12">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-calendar-o"></i></div>
              <br>
              <form action="{{ URL('waktu') }}" method="GET">
                <center>
                  <div class="col-md-8">
                      <p align="left" style="color: red">*Pilih Tanggal <i>(Choose Date) :</i></p>
                    <input type="text" class="form-control custom-input" id="datepicker" name="tanggal" placeholder="Pilih Tanggal" aria-describedby="basic-addon1" style="border-radius: 20px; font-size: 30px; color: #333896; font-weight: bold; text-align: center;" required="required" readonly=readonly>
                    
                  </div>
                  
                  <input type="hidden" name="lokasi" value="{{ $lokasi }}">
                  <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
                  <br>
                  <button class="btn btn-info custom">Booking <i class="fa fa-chevron-right"></i></button>
                </center>
              </form>
            </div>
          </div>

      </div>
    </section><!-- #services -->
@endsection
@section('script')
<script>
  $('#datepicker').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    daysOfWeekDisabled: [0],
    startDate: '+1d'
  })
</script>
@endsection