<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }

    function login(Request $request)
    {
        Session::flash("email", $request->email);
        $request->validate([
            "email" => "required",
            "password" => "required"
        ], [
            "email.required" => "Email Wajib diisi",
            "password.required" => "Password Wajib diisi"

        ]);

        $infologin = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect("admin/show")->with("success", "Berhasil Login");
        } else {
            return redirect("sesi")->withErros("Username dan Password Anda salah");
        }

    }

    function logout() {
        Auth::logout();
        return redirect("sesi")->with("success", "Berhasil Logout");
    }


}
