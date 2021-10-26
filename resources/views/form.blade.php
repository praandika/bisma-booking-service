@extends('layout.app1')
@section('title','$title')

@section('content')
<!--==========================
      Booking Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Booking {{ $lokasi }}, {{ $tanggal }}, Jam {{ $waktu }}</h2>
          <center><h3><strong>LENGKAPI DATA DIRI :</strong></h3></center>
        </div>

        <div class="container custom-input">

          <form action="{{ URL('proses') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="tanggal" value="{{ $tanggal }}">
            <input type="hidden" name="lokasi" value="{{ $lokasi }}">
            <input type="hidden" name="dealer_kode" value="{{ $dealer_kode }}">
            <input type="hidden" name="waktu" value="{{ $waktu }}">
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="nama" placeholder="Nama" class="form-control" required="required">
              </div>
              <div class="form-group col-md-6">
                <input type="number" name="telp" placeholder="No. Telp/No. HP" class="form-control" required="required">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <a href="" data-toggle="modal" data-target="#myModal">
                <input type="text" name="type" id="type" placeholder="Type Motor" class="form-control" required="required">
                </a>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="nopol" placeholder="Nomor Plat Kendaraan" class="form-control" required="required">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <select class="form-control" name="service">
                    <option value="KSG">KSG</option>
                    <option value="Service Ringan">Service Ringan</option>
                    <option value="Ganti Oli">Ganti Oli</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <textarea class="form-control" placeholder="Ada keluhan dengan motor Anda? (Keluhan dapat dikosongkan)" name="keluhan"></textarea>
              </div>
            </div>
            <center><button class="btn btn-info custom">Booking Now</button></center>
            <br>
          </form>

        </div>

        </div>  

      </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel">Daftar Type</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="table-responsive">
      <table id="tabel" class="table table-bordered table-hover display">
        <thead>
          <tr>
            <th>Type Motor</th>
          </tr>
        </thead>                    
        <tbody> 
          <tr class="klik" data-type="Nmax">
            <td>Nmax</td>
          </tr>
          <tr class="klik" data-type="Lexi">
            <td>Lexi</td>
          </tr>
          <tr class="klik" data-type="Xmax">
            <td>Xmax</td>
          </tr>
          <tr class="klik" data-type="Aerox">
            <td>Aerox</td>
          </tr>
          <tr class="klik" data-type="Freego">
            <td>Freego</td>
          </tr>
          <tr class="klik" data-type="Mio Series">
            <td>Mio Series</td>
          </tr>
          <tr class="klik" data-type="Mio Soul">
            <td>Mio Soul</td>
          </tr>
          <tr class="klik" data-type="Mio Soul GT">
            <td>Mio Soul GT</td>
          </tr>
          <tr class="klik" data-type="Xeon">
            <td>Xeon</td>
          </tr>
          <tr class="klik" data-type="X-Ride">
            <td>X-Ride</td>
          </tr>
          <tr class="klik" data-type="Fino">
            <td>Fino</td>
          </tr>
          <tr class="klik" data-type="Jupiter Z">
            <td>Jupiter Z</td>
          </tr>
          <tr class="klik" data-type="Jupiter MX">
            <td>Jupiter MX</td>
          </tr>
          <tr class="klik" data-type="MX King">
            <td>MX King</td>
          </tr>
          <tr class="klik" data-type="Vega">
            <td>Vega</td>
          </tr>
          <tr class="klik" data-type="MT-15">
            <td>MT-15</td>
          </tr>
          <tr class="klik" data-type="Vixion Series">
            <td>Vixion Series</td>
          </tr>
          <tr class="klik" data-type="MT-25">
            <td>MT-25</td>
          </tr>
          <tr class="klik" data-type="Xabre">
            <td>Xabre</td>
          </tr>
          <tr class="klik" data-type="Byson">
            <td>Byson</td>
          </tr>
          <tr class="klik" data-type="R15 Series">
            <td>R15 Series</td>
          </tr>
          <tr class="klik" data-type="R25 Series">
            <td>R25 Series</td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
<!--    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
  </div>
  </div>
</div>
@endsection

@section('script')
<script>
    // START CODE FOR BASIC DATA TABLE 
  $(document).ready(function() {
    $('#tabel').DataTable({
      "aLengthMenu": [[50, 75, -1], [50, 75, "All"]],
      "iDisplayLength": 50,
      "paging": false
    });
  });
    // END CODE FOR BASIC DATA TABLE              
</script>
<!-- END Java Script for this page -->

<script type="text/javascript">
  //passing data ke input text
  $(document).on('click', '.klik', function (e){
    document.getElementById("type").value = $(this).attr('data-type');
    $('#myModal').modal('hide');
  });
</script>
@include('sweetalert::alert')
@endsection