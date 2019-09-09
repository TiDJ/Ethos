<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function objectif()
    {
        return view('pages.objectif');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profil()
    {
        return view('pages.profil');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function actu()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('pages.actu', [
            'posts' => $posts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $data = $request->validated();
        $comment = new Comment;
        $comment->content = $data['content'];
        $comment->post_id = $data['post_id'];
        $comment->user_id = auth()->user()->id;
        $comment->save();
        Session::flash('status', 'Votre commentaire a bien été pris en compte');
        return back();
    }

    public function article($slug) // mon-titre
    {
        $post = Post::where('slug', '=', $slug)->first();

        return view('pages.article', [
            'post' => $post
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mention()
    {
        return view('pages.mention');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function politique()
    {
        return view('pages.politique');
    }
}
