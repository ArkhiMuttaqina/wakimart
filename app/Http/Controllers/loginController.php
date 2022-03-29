<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Auth;
use App\Models\User;

use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class loginController extends Controller
{
    public function index(){

        $ses_user = Session::get('id');

        if ($ses_user != null) {
            return redirect('/dashboard')->with('alert', 'Berhasil Login');
        }else{
            $message = "Sesi anda telah habis silahkan masuk.";
            return view('.login')->with('login_alert', $message);
            }

    }
    public function postlogin(Request $request)
    {
        $email = $request->email;
        $password = $request->thepassword;
        $data = User::where('email', $email)->first();

        if ($data) {
            $pw = decrypt($data->password);
            if ($password == $pw) {
                $role = role::where('id_role', $data->role)->first();
                Session::put('id', $data->id_user);
                Session::put('email', $data->email);
                Session::put('role', $role->nama_role);
                Session::put('nama', $data->name);
                Session::put('initial', $data->initial);

                return redirect('/dashboard')->with('login_alert', 'Berhasil Login');
            } else {
                return redirect('/')->with('login_alert', 'Login gagal! Password Salah');
            }
        } else {

            return redirect('/')->with('login_alert', 'Login gagal! Password Salah');
        }
    }



    public function postlogout()
    {
        $ses_user = Session::get('id');
        $ses_inisial = Session::get('initial');
        $ses_nama = Session::get('nama');
        $ses_email = Session::get('email');
        $ses_role = Session::get('role');

        try {
            FacadesAuth::logout();
            Session::flush();
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with(['upps' => 'gagal']);
        }
        $x = Session::get('id');
        if ($x == null) {
            $message = "anda telah keluar dari Aplikasi.";
            return redirect('/')->with('login_alert', $message);
        }
    }
}
