<?php

namespace App\Http\Controllers;
use App\Models\karyawan;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class karyawanController extends Controller
{
    public function index()
    {
        $ses_user = Session::get('id');
        $ses_inisial = Session::get('initial');
        $ses_nama = Session::get('nama');
        $ses_email = Session::get('email');
        $ses_role = Session::get('role');

        $karyawan = DB::table('karyawan')->get();

        $cuti = DB::table('cuti')->get();



        $data = array(
            'karyawan'      =>  $karyawan,
            'cuti'    =>  $cuti
        );
        if ($ses_user == null) {
            $message = "Waktu anda habis, silahkan login kembali untuk mengakses Aplikasi.";
            return redirect()->route('/')->with('login_alert', $message);
        }else{
        return view('.admin.karyawan', $data);
        }
    }

    public function getKaryawan(Request $request){

        if($request->ajax()){
            $data = DB::table('karyawan')->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function addkaryawan(Request $request)
    {
        $addnew = new karyawan();
        $addnew->nama = $request->a_full_name;
        $addnew->alamat = $request->a_address;
        // $getinitial = substr($request->a_full_name, 0, 1);
        // $addnew->initial = $getinitial;
        $addnew->tanggal_lahir = $request->a_birth;
        $addnew->jatah_cuti = 12;
        $addnew->date_registered = $request->a_registered;
        $getnourut = karyawan::max('nourut');

        if($getnourut == null){
            $InitNoUrut= 1;
        }else{
            $maxurut =
                karyawan::max('nourut');
            $InitNoUrut = $maxurut + 1;
        }
        $noinduk = "IP600" . $InitNoUrut;
        $addnew->no_induk = $noinduk;
        $addnew->nourut = $InitNoUrut;

        $addnew->save();
        if ($addnew->id_user != null) {
            $message = "Sudah ter update.";
            return redirect('/karyawan');
        } else {
            return redirect('/karyawan');
        }
    }

    public function editkaryawan(Request $request)
    {
        $edititem = karyawan::find($request->ubah_id);
        $edititem->nama = $request->e_full_name;
        $edititem->alamat = $request->e_address;
        $edititem->tanggal_lahir = $request->e_birth;
        $edititem->jatah_cuti = $request->e_jatah_cuti;
        $edititem->date_registered = $request->e_registered;
        $edititem->save();
        if ($edititem->id_user != null) {
            $message = "Sudah ter update.";
            return redirect('/karyawan');
        } else {
            return redirect('/karyawan');
        }
    }
    public function delkaryawan(Request $request)
    {
        $ids = $request->del_id;
        try {
            $del = karyawan::where('id_karyawan', $ids)->first();
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with(['upps' => 'gagal']);
        }
        $del->delete($ids);
        return redirect('/karyawan');
    }
}
