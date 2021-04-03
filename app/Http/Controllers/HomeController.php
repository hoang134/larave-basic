<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'index';
        return view('index',[
            'title' => $title
        ]);
    }

    public function test(Request $request)
    {
       return view('test');
    }

    public function home(Request $request)
    {

        return view('home');
    }
    public function handle(Request $request)
    {

    }
}
