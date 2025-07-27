<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\auth\AuthModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use function App\Helper\path_view;

class AuthContoller extends Controller
{
    public function showLogin(){
        $view = path_view('auth.authentikasi');
        return view($view);
    }

    public function login(Request $request){
        $credential = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        $authentication = AuthModel::where('username', $credential['username'])->first();
        if(!$authentication){
            return back()->withErrors([
                'username' => 'Email Anda tidak tersedia'
            ]);
        }

        if(!Hash::check($credential['password'], $authentication->password)){
            return back()->withErrors([
                'password' => 'Password Anda Salah'
            ]);
        }

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            $role = $authentication->role;

            session()->flash('success', 'Selamat Datang Kembali');

            return match($role){
                'admin' => redirect()->route('dashboard-admin'),
                default => back()->withErrors(['username' => 'username tidak dikenali'])
            };

        } else {
            return back()->withErrors([
                "username" => 'username atau password salah'
            ]);
        }

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        session()->flash('success', 'Anda berhasil logout');

        return redirect()->route('page.hero');
    }




    public function showRegister(){
        $view = path_view('auth.registrasi');
        return view($view);
    }
}
