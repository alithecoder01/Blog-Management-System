<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostController extends Controller
{
    function index(Request $request, $id)
    {
        $post = Post::find($id);
        return view("post", compact("post"));
    }

    function delete($id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return redirect("/home")->with("success", "Post deleted");
        } else {
            return "Post not found.";
        }
    }

    function editPost(Request $request, $id)
    {
        $post = Post::find($id);
        $category = Category::all();
        $tag = Tag::all();
        return view("editPost", compact("post", "category", "tag"));
    }

    function updatePost(Request $request, $id)
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

        $post = Post::find($id);
        if ($post) {
            $post->update(
                [
                    'title' => $request->input('title'),
                    'body' => $request->input('content'),
                    'excerpt' => $request->input('excerpt'),
                ]

            );
            $post->categories()->sync($request->input('category', []));
            $post->tags()->sync($request->input('tag', []));
            return redirect("/editPost/" . $id)->with("success", "Post Updated");
        }
    }
}
