<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(8);

        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $postData = $request->validated();
        $post = new Post;
        if (isset($postData['thumbnail'])) {
            $post->thumbnail = $postData['thumbnail'];
        }
        $post->title = $postData['title'];
        $post->slug = $postData['slug'];
        $post->content = $postData['content'];
        $post->summary = $postData['summary'];
        $post->user_id = Auth::user()->id;
        $post->save();

        Session::flash('status', 'Article bien ajouté');
        Session::flash('type', 'alert-success');
        return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $postData = $request->validated();
        if (isset($postData['thumbnail'])) {
            $post->thumbnail = $postData['thumbnail'];
        }
        $post->title = $postData['title'];
        $post->slug = $postData['slug'];
        $post->content = $postData['content'];
        $post->summary = $postData['summary'];
        $post->created_at = $postData['created_at'];
        $post->user_id = Auth::user()->id;
        $post->save();
        Session::flash('status', 'Article bien modifié');
        Session::flash('type', 'alert-success');

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Session::flash('status', 'Article bien supprimé');
        Session::flash('type', 'alert-warning');

        return redirect()->route('posts.index');
    }
}
