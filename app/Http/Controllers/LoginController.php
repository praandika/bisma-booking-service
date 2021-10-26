<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
    	$title = "Yamaha Bisma Group";
    	return view('admin.index',compact('title')); 
    }

    public function loginPost(Request $request){
        $user = $request->user;
        $pass = $request->pass;

        $cek = DB::table('users')->where('username',$user)->first();
        if ($cek) { //cek data ada atau tidak
            if (Hash::check($pass,$cek->password)) {
                Session::put('name',$cek->name);
                Session::put('akses',$cek->akses);
                Session::put('dealer',$cek->dealer);
                Session::put('login',TRUE);
                toast('Selamat Datang '.$cek->name.'','success')->width('300px');
                return redirect('admin/dashboard');
            }else{
            	alert('Login Gagal!','Username atau password salah', 'warning')->persistent('OK');
                return redirect('admin');
            }
        }else{
        	alert('Login Gagal!','Username tidak terdaftar', 'warning')->persistent('OK');
            return redirect('admin');
        }
    }

    public function logoutPost(){
        Session:flush();
        toast('Anda sudah logout','success')->width('300px');
        return redirect('admin');
    }
}
