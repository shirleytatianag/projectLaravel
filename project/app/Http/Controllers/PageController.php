<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
        $search= $request->search;
        $posts= Post::where('title', 'ILIKE', "%{$search}%")
            ->with('user')
            ->latest()->paginate();
        return view('home', ['posts'=>$posts]);
    }
    public function post(Post $post){
        return view('post', ['post'=>$post]);
    }

    /*public function blog(){
        //$posts= Post::get();
        //$post= Post::first();
        //$post= Post::find(25);

        //dd($post);
        $posts= Post::latest()->paginate();
        //dd($posts);
        return view('blog', ['ej'=>$posts]);
    }*/

}
