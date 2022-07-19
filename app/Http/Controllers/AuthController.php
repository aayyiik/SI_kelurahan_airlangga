<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function login(){
        return view('auth.login');
    }

    public function postlogin(Request $request){

        $this->validate($request, [
            'nik'=>'required|16',
            'password'=>'required',
        ]);

        $user = $request->only('nik','password');
        if(Auth::attempt($user)){

            $user = Auth::user();

            if($user->jabatan == '....' ){
                return redirect('/dashboardAdmin');
            }elseif($user->role == 'petugas'){
                return redirect ('/dashboard_petugas');
            }elseif($user->role == 'warga'){
                return redirect('/dashboard');
            }

            return redirect()->intended('/');
        }

        return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    
        }

            public function logout (Request $request){
                $request->session()->flush();
                Auth::logout();
                return redirect('/login');

            }
}
