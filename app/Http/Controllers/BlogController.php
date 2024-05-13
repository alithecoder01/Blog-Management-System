<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\auth;
class BlogController extends Controller
{
    function index(Request $request){
        $category = Category::all();
        $tag = Tag::all();
        //$user = User::with('posts')->find($user_Id);
        return view('create_blog',compact('category','tag'));
    }

    function store(Request $request)
    {
        
        $request->validate(
            [
                'title' => ['required', 'string'],
                'content' => ['required', 'string'],
                'excerpt' => ['required', 'string'],
                'category' => ['required', 'array'],
                'category.*' => ['required', 'integer', 'exists:categories,id'],
                'tag' => ['required', 'array'],
                'tag.*' => ['required', 'integer', 'exists:tags,id'],
            ]
        );

        $post=Post::create([
            "title" => $request->input("title"),
            "body" => $request->input("content"),
            "excerpt" => $request->input("excerpt"),
            "user_id" => auth::user()->id
        ]);
        // Add the categories to the DB
        $post->categories()->attach($request->input('category'));
        // Add the tags to the DB
        $post->tags()->attach($request->input('tag'));

        return redirect('/create')->with("success", "Blog Added, go to Home");
    }


}
