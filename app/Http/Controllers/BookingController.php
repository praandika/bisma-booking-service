<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    public function index(){
 		$title = "Booking Service";
    	return view('index',compact('title'));
    }

    public function tanggal(Request $request){
 		$title = "Booking Service";
        $lokasi = $request->lokasi;
        $dealer_kode = $request->dealer_kode;
 		$tgl = \Carbon\Carbon::tomorrow('GMT+8')->format('j F Y');
    	return view('tanggal',compact('title','lokasi','dealer_kode','tgl'));
    }

    public function waktu(Request $request){
 		$title = "Booking Service";
        $lokasi = $request->lokasi;
        $dealer_kode = $request->dealer_kode;
        $tanggal = $request->tanggal;
        $w9 = DB::table('bookings')
        ->where([ ['dealer_kode','=',$dealer_kode],['tanggal','=',$tanggal],['waktu','=','09.00'], ])
        ->count();
        $w10 = DB::table('bookings')
        ->where([ ['dealer_kode','=',$dealer_kode],['tanggal','=',$tanggal],['waktu','=','10.00'], ])
        ->count();
        $w11 = DB::table('bookings')
        ->where([ ['dealer_kode','=',$dealer_kode],['tanggal','=',$tanggal],['waktu','=','11.00'], ])
        ->count();
        $w13 = DB::table('bookings')
        ->where([ ['dealer_kode','=',$dealer_kode],['tanggal','=',$tanggal],['waktu','=','13.00'], ])
        ->count();
        $w14 = DB::table('bookings')
        ->where([ ['dealer_kode','=',$dealer_kode],['tanggal','=',$tanggal],['waktu','=','14.00'], ])
        ->count();
    	return view('waktu',compact('title','lokasi','dealer_kode','tanggal','w9','w10','w11','w13','w14'));
    }

   	public function form(Request $request){
 		$title = "Booking Service";
        $lokasi = $request->lokasi;
        $dealer_kode = $request->dealer_kode;
        $tanggal = $request->tanggal;
        $waktu = $request->waktu;
        $a = \Carbon\Carbon::now('GMT+8')->format('YmdHis');
        $token = "BO".$a;
    	return view('form',compact('title','lokasi','dealer_kode','tanggal','waktu','token'));
    }

    public function prosesBooking(Request $request){
        $cek = DB::table('bookings')
        ->where([ ['nopol','=',$request->nopol],['tanggal','=',$request->tanggal],['waktu','=',$request->waktu], ])
        ->count();

        if ($cek > 0) {
            toast('This Motorcycle has Ordered Service!','warning')->width('300px');
            return redirect()->back();
        }else{
            DB::table('bookings')->insert([
                'dealer' => $request->lokasi,
                'dealer_kode' => $request->dealer_kode,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'type' => $request->type,
                'nama' => $request->nama,
                'kontak' => $request->telp,
                'nopol' => $request->nopol,
                'service' => $request->service,
                'keluhan' => $request->keluhan,
                'token' => $request->token,
                'created_at' => \Carbon\Carbon::now('GMT+8')->format('Y-m-d H:i:s'),
            ]);
        }
        $token = $request->token;
        toast('Successfully Booked','success')->width('300px');
        return redirect('/'.$token);
    }

    public function result($token){
        $title = "Print Booking";
        $tgl = \Carbon\Carbon::now('GMT+8')->format('j F Y H:i:s');
        $booking = DB::table('bookings')
        ->where('token',$token)
        ->get();

        return view('result',compact('title','tgl','booking'));
    }

    public function printBooking($token){
        $title = "Print Booking Service";
        $tgl = \Carbon\Carbon::now('GMT+8')->format('Y-m-d H:i:s');
        $booking = DB::table('bookings')
        ->join('dealers','bookings.dealer_kode','=','dealers.kode_dealer')
        ->where('token',$token)
        ->get();
        $pdf = PDF::loadview('print.booking_print',compact('title','booking','tgl'));
        return $pdf->download($tgl.'_booking.pdf');
    }
}