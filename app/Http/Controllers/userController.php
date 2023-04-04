<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{
    public function logregview(){
        return view('user/reglogin');
    }

    public function userRegister(Request $request){
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email:rfc,dns|unique:users',
                'alamat' => 'required',
                'password' => 'required|min:5',
            ]
        );

        $validatedData['password'] = Hash::make($validatedData['password']);

        if($request->hasFile('foto_user')) {
            $extension = $request->file('foto_user')->getClientOriginalExtension();
            $new_name = $request->name . '-' . now()->format('Y-m-d') . '.' . $extension;
            $img = $request->file('foto_user')->storeAs('fotoUser', $new_name);
            $validatedData['foto_user'] = $img;
        }

        User::create($validatedData);

        return redirect('/logreg')->with('registerSuccess', 'Registrasi Berhasil!');
    }

    public function viewHome(){
        return view('user/home');
    }

    public function userLogin(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:5',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(auth()->user()->role === 'customer') {
                return redirect()->intended('/');
            }

            return redirect()->intended('/admin');
        }

        return back()->with('loginError', 'Login gagal!');
    }
}
