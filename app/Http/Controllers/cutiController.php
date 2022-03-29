<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use App\Models\cuti;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class cutiController extends Controller
{
    public function index()
    {

        $ses_user = Session::get('id');
        $ses_inisial = Session::get('initial');
        $ses_nama = Session::get('nama');
        $ses_email = Session::get('email');
        $ses_role = Session::get('role');


        $karyawan = DB::table('karyawan')->get();
        $cuti = DB::table('cuti')->leftJoin('karyawan', 'karyawan.id_karyawan', '=', 'cuti.id_karyawan')->get();
        $data = array(
            'karyawan'      =>  $karyawan,
            'cuti'    =>  $cuti
        );
        if ($ses_user == null) {
            $message = "Waktu anda habis, silahkan login kembali untuk mengakses Aplikasi.";
            return redirect()->route('/')->with('login_alert', $message);
        } else {
        return view('.admin.cuti', $data);
    }
    }

    public function addcuti(Request $request)
    {
        $addnew = new cuti;
        $addnew->id_karyawan = $request->a_p_karyawan;
        $addnew->tanggal_cuti = $request->a_tgl_cuti;
        $addnew->lama_cuti = $request->a_cuti_number;

        $get_jatah_cuti = DB::table('karyawan')->where('karyawan.id_karyawan', '=', $request->a_p_karyawan)->first();
        $x = $get_jatah_cuti->jatah_cuti;
        $edititem = karyawan::find($request->a_p_karyawan);
        $int_cuti_number= $request->a_cuti_number;
        $edititem->jatah_cuti = $x - $int_cuti_number;
        $edititem->update();
        $addnew->alasan_cuti = $request->a_keterangan_cuti;
        if($edititem->id_karyawan != null){
            $addnew->save();
        }

        // dd($addnew);
        if ($addnew->id_cuti != null) {
            $message = "Sudah ter update.";
            return redirect('/cuti');
        } else {
            return redirect('/cuti');
        }

    }

    public function editcuti(Request $request)
    {
        $edititem = cuti::find($request->ubah_id);
        // $edititem->id_karyawan = $request->e_cuti_nama;
        $edititem->tanggal_cuti = $request->e_tgl_cuti;
        $edititem->lama_cuti = $request->e_cuti_number;
        $edititem->alasan_cuti = $request->e_keterangan_cuti;
        $edititem->save();
        if ($edititem->id_cuti != null) {
            $message = "Sudah ter update.";
            return redirect('/cuti');
        } else {
            return redirect('/cuti');
        }

    }


    public function delcuti(Request $request)
    {
        $ids = $request->del_id;
        try {
            $del = cuti::where('id_cuti', $ids)->first();
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with(['upps' => 'gagal']);
        }
        $del->delete($ids);
        return redirect('/cuti');
    }
}
