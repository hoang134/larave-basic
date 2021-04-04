<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       return view('index');
    }
    public function getLogin()
    {
        return view('login');

    }  public function postLogin(Request $request)
    {
        $request->session()->put('login',true);
        $request->session()->put('role',$request->role);
        return redirect('admin');
    }

    public function home(Request $request)
    {
        return view('home');
    }

}
