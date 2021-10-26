@extends('layout.app3')
@section('title','$title')

@section('content')
<div class="container">
	<div class="row">
		<img src="asset/img/print_book_header.png" alt="" style="width: 100%;"> 
	</div>
	@foreach($booking as $o)
	<div class="box">
	<table align="center">
		<tr>
			<th><img src="asset/img/map-black.png" alt=""></th>
			<th style="font-size: 40px;"> {{ $o->dealer }}</th>
		</tr>
		<tr>
			<th><img src="asset/img/calendar-black.png" alt=""></th>
			<th style="font-size: 40px;"> {{ $o->tanggal }}</th>
		</tr>
		<tr>
			<th><img src="asset/img/clock-black.png" alt=""></th>
			<th style="font-size: 40px;"> {{ $o->waktu }}</th>
		</tr>
	</table>
	</div>
	<table class="table table-bordered table-striped tbreport">
		<thead>
			<tr style="background-color: #C4E7F9;">
				<th>
					No. Kendaraan
					<br>
					<i style="font-size: 14px;">(License Plate)</i>
				</th>
				<th>
					Tipe Motor
					<br>
					<i style="font-size: 14px;">(Motorcycle type)</i>
				</th>
				<th>
					Nama Pelanggan
					<br>
					<i style="font-size: 14px;">(Customer's Name)</i>
				</th>
				<th>
					Kontak
					<br>
					<i style="font-size: 14px;">(Contact)</i>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>{{ $o->nopol }}</th>
				<th>{{ $o->type }}</th>
				<th>{{ $o->nama }}</th>
				<th>{{ $o->kontak }}</th>
			</tr>
		</tbody>
	</table>
	<table class="tbreport">
		<tfoot>
			<tr style="background-color: #FAF2E1;">
				<th>
					<p style="color: #AE6005; font-size: 9px;">*Harap bawa bukti booking ini saat melakukan service di Dealer Yamaha Bisma</p>
					<p style="color: #AE6005; font-size: 9px;"><i>(*show this booking file at the service counter)</i></p>
					<p style="color: #CF1B1B; font-size: 11px;">*Registrasi ulang 15 menit sebelum waktu booking. <i>(*Please Re-registration 15 minutes before)</i></p>
				</th>
			</tr>
		</tfoot>
	</table>
	<table align="center">
		<tr>
			<th>
				<a href="{{ $o->maps }}" target="_blank">
				<img src="asset/img/btn-goto.png" alt="" width="200px">
				</a>
			</th>
			<th>
				&nbsp;&nbsp;OR
			</th>
			<th>
				<center>
					<div style="font-size: 12px;">Go To Dealer By Scan</div>
					<img src="asset/img/{{ $o->qrcode }}" alt="">
				</center>
			</th>
		</tr>
	</table>
	@endforeach
	
	<div class="row">
		<img src="asset/img/print_book_footer.png" alt="" style="width: 100%;"> 
	</div>
</div>
@endsection