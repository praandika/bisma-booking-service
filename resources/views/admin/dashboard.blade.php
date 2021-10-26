@extends('layout.app2')
@section('title','$title')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="box box-success">
      	<div class="box-header">
          <div class="row">
            <div class="col-md-9" align="left">
              <h3 class="box-title" style="color: #165C19;"><strong>Service Hari Ini</strong></h3>
            </div>
          </div>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
        	<table id="myTable1" class="table table-bordered table-striped table-hover">
        		<thead>
                <tr>
                  <th>#</th>
                  <th>Nama Pelanggan</th>
                  <th>Type Motor</th>
                  <th>Plat Kendaraan</th>
                  <th>Service</th>
                  <th>Keluhan</th>
                  <th>No. Telp</th>
                  <th>Dealer</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                </tr>
                </thead>
                <tbody>
                @php ($no = 1)
                @foreach($skg as $o)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $o->nama }}</td>
                  <td>{{ $o->type }}</td>
                  <td>{{ $o->nopol }}</td>
                  <td>{{ $o->service }}</td>
                  <td>{{ $o->keluhan }}</td>
                  <td>{{ $o->kontak }}</td>
                  <td>{{ $o->dealer }}</td>
                  <td>{{ $o->tanggal }}</td>
                  <td>{{ $o->waktu }}</td>
                </tr>
                @endforeach
                </tbody>
        	</table>
          </div>
        </div>
      </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <div class="box box-warning">
      	<div class="box-header">
          <div class="row">
            <div class="col-md-9" align="left">
              <h3 class="box-title"><strong>Service Besok</strong></h3>
            </div>
          </div>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
        	<table id="myTable2" class="table table-bordered table-striped table-hover">
        		<thead>
                <tr>
                  <th>#</th>
                  <th>Nama Pelanggan</th>
                  <th>Type Motor</th>
                  <th>Plat Kendaraan</th>
                  <th>Service</th>
                  <th>Keluhan</th>
                  <th>No. Telp</th>
                  <th>Dealer</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                </tr>
                </thead>
                <tbody>
                @php ($no = 1)
                @foreach($besok as $o)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $o->nama }}</td>
                  <td>{{ $o->type }}</td>
                  <td>{{ $o->nopol }}</td>
                  <td>{{ $o->service }}</td>
                  <td>{{ $o->keluhan }}</td>
                  <td>{{ $o->kontak }}</td>
                  <td>{{ $o->dealer }}</td>
                  <td>{{ $o->tanggal }}</td>
                  <td>{{ $o->waktu }}</td>
                </tr>
                @endforeach
                </tbody>
        	</table>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-line-chart"></i> Booking Service</h3>
			</div>
			<div class="box-body" style="height: 300px">
				{!! $chartBooking->container() !!}
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
  $(function () {
    $('#myTable1').DataTable()
    $('#myTable2').DataTable()
  })
</script>

@if($chartBooking)
	  {!! $chartBooking->script() !!}
@endif

@endsection