<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class userController extends Controller
{
    public function index()
    {
        $ses_user = Session::get('id');
        $ses_inisial = Session::get('initial');
        $ses_nama = Session::get('nama');
        $ses_email = Session::get('email');
        $ses_role = Session::get('role');

        $user = DB::table('user_erp')->leftJoin('role', 'role.id_role', '=', 'user_erp.role')
            ->get();

        $rolesaja = DB::table('role')->get();

        $data = array(
            'user'      =>  $user,
            'rolesaja'    =>  $rolesaja
        );

        if ($ses_user == null) {
            $message = "Waktu anda habis, silahkan login kembali untuk mengakses Aplikasi.";
            return redirect()->route('/')->with('login_alert', $message);
        } else {
            $message = "Sesi anda telah habis silahkan masuk.";
            return view('admin.manajeruser', $data);
        }
    }

    public function addadmin(Request $request)
    {
        $addnew = new User;
        $addnew->name = $request->a_full_name;
        $addnew->email = $request->a_email;
        $getinitial = substr($request->a_full_name, 0, 1);
        $addnew->initial = $getinitial;
        $addnew->password = encrypt($request->input('a_password2'));
        $addnew->role = $request->a_role;
        $addnew->save();

        // dd($addnew);
        if ($addnew->id_user != null) {
            $message = "Sudah ter update.";
            return redirect('/admin');
        } else {
            return redirect('/admin');
        }
    }

    public function editadmin(Request $request)
    {
        $edititem = User::find($request->ubah_id);
        $edititem->name = $request->e_full_name;
        $edititem->email = $request->e_email;
        $getinitial = substr($request->e_full_name, 0, 1);
        $edititem->initial = $getinitial;
        $edititem->password = encrypt($request->input('e_password2'));
        $edititem->role = $request->e_role;
        $edititem->save();
        if ($edititem->id_user != null) {
            $message = "Sudah ter update.";
            return redirect('/admin');
        } else {
            return redirect('/admin');
        }
    }
    public function deladmin(Request $request)
    {
        $ids = $request->del_id;
        try {
            $del = User::where('id_user', $ids)->first();
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with(['upps' => 'gagal']);
        }
        $del->delete($ids);
        return redirect('/admin');
    }
}
