<?php namespace App\Http\Controllers;



use App\Modalidade;
use App\Organization;
use App\Post;
use App\Team;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class PostsController extends Controller
{



    public function __construct()
    {

    }


    /** WEB  */
    /**
     * @return Game (all collections);
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }




}
