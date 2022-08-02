<?php 

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //recuperer tout les posts qui sont en bd
        $posts = Post::all();


        return view('articles', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        // dd($post);
        // $posts = [
        //     1 => 'Mon titre n1',
        //     2 => 'Mon titre n2',
        // ];

        // $post = $posts[$id] ?? 'Pas de titre disponible';

        return view('article', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function contact()
    {
        return view('contact');
    }
}