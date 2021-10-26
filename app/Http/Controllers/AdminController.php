<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use Illuminate\Support\Facades\Session;
use Hash;
use App\Charts\ChartJs;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(){
    	if (!Session::get('login')) {
            alert('Gagal Login!','Silahkan login terlebih dahulu!','error')->persistent('OK');
            return redirect('admin/');
        }else{
        	$title = "Dashboard";
            $tglSekarang = \Carbon\Carbon::now('GMT+8')->format('Y-m-d');
            $tglBesok = \Carbon\Carbon::tomorrow('GMT+8')->format('Y-m-d');
            $tahunNow = \Carbon\Carbon::now('GMT+8')->format('Y');
            $lastYear = $tahunNow - 1;
            $bulanNow = \Carbon\Carbon::now('GMT+8')->format('m');
            $dealer = Session::get('dealer');
            
            if($dealer == "all"){
                $skg = DB::table('bookings')
                ->join('dealers','bookings.dealer_kode','=','dealers.kode_dealer')
                ->where('tanggal',$tglSekarang)
                ->orderBy('bookings.id_booking','desc')
                ->get();
    
                $besok = DB::table('bookings')
                ->join('dealers','bookings.dealer_kode','=','dealers.kode_dealer')
                ->where('tanggal',$tglBesok)
                ->orderBy('bookings.id_booking','desc')
                ->get();
    
                //Chart Booking------------------------------------------
                $jan = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','01')
                ->count();
                $feb = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','02')
                ->count();
                $mar = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','03')
                ->count();
                $apr = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','04')
                ->count();
                $may = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','05')
                ->count();
                $jun = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','06')
                ->count();
                $jul = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','07')
                ->count();
                $aug = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','08')
                ->count();
                $sep = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','09')
                ->count();
                $oct = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','10')
                ->count();
                $nov = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','11')
                ->count();
                $des = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','12')
                ->count();
    // -----------------------------------------------------------------------
                $janLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','01')
                ->count();
                $febLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','02')
                ->count();
                $marLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','03')
                ->count();
                $aprLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','04')
                ->count();
                $mayLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','05')
                ->count();
                $junLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','06')
                ->count();
                $julLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','07')
                ->count();
                $augLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','08')
                ->count();
                $sepLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','09')
                ->count();
                $octLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','10')
                ->count();
                $novLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','11')
                ->count();
                $desLY = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','12')
                ->count();
                
                $chartBooking = new ChartJs;
                $chartBooking->title('Booking Service By Months');
                $chartBooking->displaylegend(true);
                $chartBooking->labels([
                    'Jan','Feb','Mar','Apr','May','Jun',
                    'Jul','Aug','Sep','Oct','Nov','Des'
                ]);
    
                $chartBooking->dataset($tahunNow, 'line', [
                    $jan, $feb, $mar, $apr, $may, $jun,
                    $jul, $aug, $sep, $oct, $nov, $des
                ])
                ->color("#1296F2")
                ->backgroundcolor("rgba(17,55,192,0.4)")
                ->linetension(0.0);
                
                $chartBooking->dataset($lastYear, 'line', [
                    $janLY, $febLY, $marLY, $aprLY, $mayLY, $junLY,
                    $julLY, $augLY, $sepLY, $octLY, $novLY, $desLY
                ])
                ->color("#EBD622")
                ->backgroundcolor("rgba(231,180,24,0.4)")
                ->linetension(0.0);
                
                //END Penjualan------------------------------------------
                return view('admin.dashboard',compact('title','skg','besok','chartBooking'));
            }else{
                $skg = DB::table('bookings')
                ->join('dealers','bookings.dealer_kode','=','dealers.kode_dealer')
                ->where([ ['tanggal',$tglSekarang],['bookings.dealer_kode',$dealer], ])
                ->orderBy('bookings.id_booking','desc')
                ->get();
    
                $besok = DB::table('bookings')
                ->join('dealers','bookings.dealer_kode','=','dealers.kode_dealer')
                ->where([ ['tanggal',$tglBesok],['bookings.dealer_kode',$dealer], ])
                ->orderBy('bookings.id_booking','desc')
                ->get();
    
                //Chart Booking------------------------------------------
                $jan = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','01')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $feb = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','02')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $mar = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','03')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $apr = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','04')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $may = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','05')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $jun = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','06')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $jul = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','07')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $aug = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','08')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $sep = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','09')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $oct = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','10')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $nov = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','11')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $des = DB::table('bookings')
                ->whereYear('tanggal',$tahunNow)
                ->whereMonth('tanggal','12')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
    // ----------------------------------------------------------------------
                $janLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','01')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $febLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','02')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $marLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','03')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $aprLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','04')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $mayLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','05')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $junLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','06')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $julLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','07')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $augLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','08')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $sepLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','09')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $octLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','10')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $novLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','11')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                $desLY = DB::table('bookings')
                ->whereYear('tanggal',$lastYear)
                ->whereMonth('tanggal','12')
                ->where('bookings.dealer_kode',$dealer)
                ->count();
                
                $chartBooking = new ChartJs;
                $chartBooking->title('Booking Service By Months');
                $chartBooking->displaylegend(false);
                $chartBooking->labels([
                    'Jan','Feb','Mar','Apr','May','Jun',
                    'Jul','Aug','Sep','Oct','Nov','Des'
                ]);
    
                $chartBooking->dataset('Booking Service', 'line', [
                    $jan, $feb, $mar, $apr, $may, $jun,
                    $jul, $aug, $sep, $oct, $nov, $des
                ])
                ->color("#1296F2")
                ->backgroundcolor("rgba(39,43,188,0.3)")
                ->linetension(0.0);
                
                $chartBooking->dataset($lastYear, 'line', [
                    $janLY, $febLY, $marLY, $aprLY, $mayLY, $junLY,
                    $julLY, $augLY, $sepLY, $octLY, $novLY, $desLY
                ])
                ->color("#EBD622")
                ->backgroundcolor("rgba(225,219,47,0.3)")
                ->linetension(0.0);
                
                //END Penjualan------------------------------------------
                return view('admin.dashboard',compact('title','skg','besok','chartBooking'));
            }
        }
    	
    }

    public function data(){
    	if (!Session::get('login')) {
            alert('Gagal Login!','Silahkan login terlebih dahulu!','error')->persistent('OK');
            return redirect('admin/');
        }else{
            $dealer = Session::get('dealer');
        	$title = "Data Booking";
            $tgl = \Carbon\Carbon::now('GMT+8')->format('Y-m-d');
        	
        	if($dealer == "all"){
        	    $data = DB::table('bookings')
        	    ->join('dealers','bookings.dealer_kode','=','dealers.kode_dealer')
    	    	->orderBy('bookings.id_booking','desc')
    	    	->get();
    
    	    	return view('admin.data_booking',compact('title','data','tgl'));
        	}else{
        	    $data = DB::table('bookings')
    	    	->join('dealers','bookings.dealer_kode','=','dealers.kode_dealer')
    	    	->where('bookings.dealer_kode','=',$dealer)
    	    	->orderBy('bookings.id_booking','desc')
    	    	->get();
    
    	    	return view('admin.data_booking',compact('title','data','tgl'));
        	}
        }
    }

    public function filter(Request $req){
    	if (!Session::get('login')) {
            alert('Gagal Login!','Silahkan login terlebih dahulu!','error')->persistent('OK');
            return redirect('admin/');
        }else{
            $dealer = Session::get('dealer');
            $title = "Data Booking";
            $awal = $req->awal;
            $akhir = $req->akhir;

        	$data = DB::table('bookings')
        	->join('dealers','bookings.dealer_kode','=','dealers.kode_dealer')
        	->whereBetween('tanggal',[$awal,$akhir])
        	->orderBy('bookings.id_booking','desc')
        	->get();

        	return view('admin.data_booking_filter',compact('title','data','awal','akhir'));
        }
    }

    // REPORT
    public function excel(){
        $now = \Carbon\Carbon::now('GMT+8')->format('Y-m-d');
        return (new BookingsExport)->download('Booking_'.$now.'.xlsx');
    }

    public function excelFilter($awal, $akhir){
        $now = \Carbon\Carbon::now('GMT+8')->format('Y-m-d');
        return (new BookingFilterExport)->awal($awal)->akhir($akhir)->download('Booking_'.$awal.'_'.$akhir.'.xlsx');
    }

    // CRUD
    public function dataAdmin(){
        if (!Session::get('login')) {
            alert('Gagal Login!','Silahkan login terlebih dahulu!','error')->persistent('OK');
            return redirect('admin/');
        }else{
        	$title = "Data Admin";
        	$data = DB::table('users')
        	->orderBy('id','desc')
        	->get();
        	return view('admin.dataadmin',compact('title','data'));
        }
    }

    public function storeAdmin(Request $request){
        if (!Session::get('login')) {
            alert('Gagal Login!','Silahkan login terlebih dahulu!','error')->persistent('OK');
            return redirect('admin/');
        }else{
            $pass = $request->pass;
            $confirm = $request->confirm;

            if ($confirm == $pass) {
                DB::table('users')->insert([
                    'name' => $request->nama,
                    'username' => $request->user,
                    'password' => Hash::make($request->confirm),
                    'akses' => $request->akses,
                    'dealer' => $request->dealer,
                ]);
                toast('Data admin berhasil disimpan','success');
                return redirect('admin/dataadmin');
            }else{
                alert('Gagal menyimpan!','Konfirmasi password salah!','warning')->persistent('OK');
                return redirect()->back();
            }
        }
    }

    public function updateAdmin(Request $request){
        if (!Session::get('login')) {
            alert('Gagal Login!','Silahkan login terlebih dahulu!','error')->persistent('OK');
            return redirect('admin/');
        }else{
            DB::table('users')->where('id',$request->id)->update([
                'name' => $request->nama,
                'username' => $request->user,
                'akses' => $request->akses,
                'dealer' => $request->dealer,
            ]);
            toast('Data admin berhasil disimpan','success');
            return redirect('admin/dataadmin');
        }
    }

    public function updatePass(Request $request){
        if (!Session::get('login')) {
            alert('Gagal Login!','Silahkan login terlebih dahulu!','error')->persistent('OK');
            return redirect('admin/');
        }else{
            $passLama = $request->passLama;
            $passBaru = $request->passBaru;
            $confirm = $request->confirm;
            $cek = DB::table('users')->where('username',$request->user)->first();

            if (Hash::check($passLama,$cek->password)){
                if ($confirm == $passBaru) {
                        DB::table('users')->where('id',$request->id)->update([
                        'password' => Hash::make($confirm),
                    ]);
                    toast('Password berhasil disimpan','success');
                    return redirect('admin/dataadmin');
                }else{
                    alert('Gagal Update!','Pastikan konfirmasi dan password sama!','warning')->persistent('OK');
                    return redirect()->back();
                }
            }else{
                alert('Oops..','Pastikan password Admin benar!','warning')->persistent('OK');
                return redirect()->back();
            }
        }
    }

    public function deleteAdmin($id){
        if (!Session::get('login')) {
            alert('Gagal Login!','Silahkan login terlebih dahulu!','error')->persistent('OK');
            return redirect('admin/');
        }else{
            DB::table('users')->where('id',$id)->delete();
            toast('Data admin berhasil dihapus','success');
            return redirect('admin/dataadmin');
        }
    }
    
    public function deleteAll(Request $request){
        $delid = $request->input('check');
        DB::table('bookings')->whereIn('id_booking',$delid)->delete();
        toast('Data admin berhasil dihapus','success');
        return redirect('admin/data');
    }
}
