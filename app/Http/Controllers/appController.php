<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class appController extends Controller
{
    public function index_perubahan()
    {
        $ses_user = Session::get('id');
        $ses_inisial = Session::get('initial');
        $ses_nama = Session::get('nama');
        $ses_email = Session::get('email');
        $ses_role = Session::get('role');
        if ($ses_user == null) {
            $message = "Waktu anda habis, silahkan login kembali untuk mengakses Aplikasi.";
            return redirect()->route('/')->with('login_alert', $message);
        } else {

            return view('.appkonfig.perubahan');
        }
    }

    public function index_tentang()
    {
        $ses_user = Session::get('id');
        $ses_inisial = Session::get('initial');
        $ses_nama = Session::get('nama');
        $ses_email = Session::get('email');
        $ses_role = Session::get('role');
        if ($ses_user == null) {
            $message = "Waktu anda habis, silahkan login kembali untuk mengakses Aplikasi.";
            return redirect()->route('/')->with('login_alert', $message);
        } else {

            return view('.appkonfig.tentangapp');
        }
    }
}
