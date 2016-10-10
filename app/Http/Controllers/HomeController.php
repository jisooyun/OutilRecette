<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Projet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $posts = Post::all();
      // return view('articles.index')->with(compact('posts'));

        $projets = projet::all();
        return view('home')->with(compact('projets'));
    }
    // public function create()
    // {
    //    /*  $post = new Post;
    //     $post->title = 'un autre article';
    //     $post->description = 'une autre description';
    //     $post->save(); */
    //
    // }
    // public function store(Requests\StoreCommentRequest $request)
    // {
    //     $comment = new Comment();
    //     $comment->user_id      = $request->user_id;
    //     $comment->post_id      = $request->post_id;
    //     $comment->description  = $request->description;
    //
    //     $comment->save();
    //     return redirect()->route('articles.show', $comment->post_id);
    // }
    //
    // public function destroy(Request $request, $id)
    // {
    //
    //     $comment = Comment::find($id);
    //     $post = $request ->post_id;
    //
    //     if(!$comment){
    //         return redirect()->route('articles.show', $post);
    //     }
    //
    //     $comment->delete();
    //     return redirect()->route('articles.show', $post);
    // }
}
