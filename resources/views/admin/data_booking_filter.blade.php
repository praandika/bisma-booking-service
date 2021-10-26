@extends('layout.app2')
@section('title','$title')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
      	<div class="box-header">
          <div class="row">
            <div class="col-md-9" align="left">
              <h3 class="box-title">Tabel {{ $title }}</h3>
            </div>
          </div>
          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6" align="left">
              <form action="{{ URL('admin/cari') }}" method="GET">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group has-feedback">
                      <input type="text" class="form-control" id="datepicker1" name="awal" placeholder="Pilih Tanggal" readonly="readonly" value="{{ $awal }}" value="{{ old('awal') }}">
                      <span class="fa fa-calendar form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group has-feedback">
                      <input type="text" class="form-control" id="datepicker2" name="akhir" placeholder="Pilih Tanggal" readonly="readonly" value="{{ $akhir }}" value="{{ old('akhir') }}">
                      <span class="fa fa-calendar form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <button class="btn btn-success btn-flat"><i class="fa fa-search"></i> Cari</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="col-md-6" align="right">
              <a href="{{ URL('admin/excel/{{ $awal }}/{{ $akhir }}') }}" class="btn btn-flat btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a>
            </div>
          </div>
          <div class="table-responsive">
            <form action="{{ URL('admin/deleteall') }}" method="POST">
            @if(Session::get('akses') == "super")
            <button class="btn btn-danger" onclick="return tanya('Yakin hapus data ini?')"><i class="fa fa-trash"></i> Hapus Terpilih</button>
            <br><br>
            @endif
            {{ csrf_field() }}
        	<table id="myTable" class="table table-bordered table-striped table-hover">
        		<thead>
                <tr>
                  @if(Session::get('akses') == "super")
                  <th><input type="checkbox" id="checkAll"> #</th>
                  @endif
                  <th>Nama Pelanggan</th>
                  <th>Type Motor</th>
                  <th>Plat Kendaraan</th>
                  <th>No. Telp</th>
                  <th>Dealer</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Service</th>
                  <th>Keluhan</th>
                </tr>
                </thead>
                <tbody>
                @php ($no = 1)
                @foreach($data as $o)
                <tr>
                  @if(Session::get('akses') == "super")
                  <td><input type="checkbox" id="checkData" name="check[]" value="{{ $o->id_booking }}"> {{ $no++ }}</td>
                  @endif
                  <td>{{ $o->nama }}</td>
                  <td>{{ $o->type }}</td>
                  <td>{{ $o->nopol }}</td>
                  <td>{{ $o->kontak }}</td>
                  <td>{{ $o->dealer }}</td>
                  <td>{{ $o->tanggal }}</td>
                  <td>{{ $o->waktu }}</td>
                  <td>{{ $o->service }}</td>
                  <td>{{ $o->keluhan }}</td>
                </tr>
                @endforeach
                </tbody>
        	</table>
        	</form>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
@section('script')
<script>
  $(function () {
    $('#myTable').DataTable({
      "aLengthMenu": [[50, 75, -1], [50, 75, "All"]],
      "iDisplayLength": 50
    })
  })
</script>

<script>
  $("#checkAll").click(function () {
  $('input:checkbox').not(this).prop('checked', this.checked);
});
</script>

<script>
  $('#datepicker1').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true
  });

  $('#datepicker2').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true
  });
</script>
@endsection