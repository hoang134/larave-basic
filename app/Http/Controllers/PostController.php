<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->orderByDesc('created_at')->paginate(8);
        $categories = Category::all();
        return view('index', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function create(StorePostRequest $request)
    {
        $post = Post::query()->create([
            'user_id' => 1,
            'title' => $request->title,
            'content' => $request->contents,
        ]);
        if ($request->hasFile('image'))
        {
            $file = $request->image;
            $file->move(public_path('images'),$file->getClientOriginalName());

            $post->update(['image' =>'images' . '/'. $file->getClientOriginalName()]);
        }
        $post->categories()->attach($request->category);
        return redirect()->route('post.index');
    }

    public function delete($id)
    {
        $post = Post::query()->findOrFail($id);
        $post->categories()->detach();
        $post->delete();
        return redirect()->route('post.index');
    }

    public function edit($id)
    {
        $post = Post::query()->findOrFail($id);
        $categories = Category::all();
        return view('edit',[
            'post' => $post,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $post = Post::query()->findOrFail($request->id);
        $post->title = $request->title;
        $post->content = $request->contents;
        $post->save();
        $post->categories()->sync($request->category);
        return redirect()->route('post.index');
    }
}
