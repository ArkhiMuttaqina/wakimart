<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use App\Models\cuti;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;


class dashboardController extends Controller
{
    public function index()
    {

        $ses_user = Session::get('id');
        $ses_inisial = Session::get('initial');
        $ses_nama = Session::get('nama');
        $ses_email = Session::get('email');
        $ses_role = Session::get('role');

        $karyawan = DB::table('karyawan')->get();

        $cuti = DB::table('cuti')
        ->leftJoin('karyawan', 'karyawan.id_karyawan', '=', 'cuti.id_karyawan')->get();

        $karyawannwest = DB::table('karyawan')->orderBy('karyawan.date_registered', 'DESC')->limit(3)->get();
        $cutinewst = DB::table('cuti')
        ->leftJoin('karyawan', 'karyawan.id_karyawan', '=', 'cuti.id_karyawan')->orderBy('cuti.created_at', 'DESC')->limit(3)->get();

        $cuti1x = DB::table('cuti')
        ->leftJoin('karyawan', 'karyawan.id_karyawan', '=', 'cuti.id_karyawan')->where('cuti.lama_cuti', '>=', '1')->orderBy('cuti.created_at', 'DESC')->get();
        $cuti10x = DB::table('cuti')
        ->leftJoin('karyawan', 'karyawan.id_karyawan', '=', 'cuti.id_karyawan')->where('cuti.lama_cuti', '>=', '10')->orderBy('cuti.created_at', 'DESC')->get();

        $data = array(
            'karyawannwest'      =>  $karyawannwest,
            'cutinewst'      =>  $cutinewst,
            'cuti1x'      =>  $cuti1x,
            'cuti10x'      =>  $cuti10x,
            'karyawan'      =>  $karyawan,
            'cuti'    =>  $cuti
        );
        if ($ses_user == null) {
            $message = "Waktu anda habis, silahkan login kembali untuk mengakses Aplikasi.";
            return redirect()->route('/')->with('login_alert', $message);
        } else {
        $message = "Sesi nda telah habis silahkan masuk.";
        return view('.dashboard', $data);
        }
    }
}
