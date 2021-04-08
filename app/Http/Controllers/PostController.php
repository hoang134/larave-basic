<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
   public function index()
   {
       $posts = DB::table('posts')->paginate(10);
       return view('index',[
           'posts' => $posts
       ]);
   }

   public function search(Request $request)
   {
       $posts = DB::table('posts')
           ->where('title','like',"%$request->title%")->paginate('10');
       return view('index',[
           'posts' => $posts
       ]);
   }
}
