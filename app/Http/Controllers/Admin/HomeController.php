<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $etiquetas = 0;
        $usuarios = 0;
        $categorias = 0;
        $postss = 0;
        $publicados1 =0;
        $publicados2 =0;


        $tags = Tag::all();
        $users = User::all();
        $categories = Category::all();
        $posts =Post::all();
        $postpub1 = Post::all()->where('status', 1); //status 1 = BORRADOR
        $postpub2 = Post::all()->where('status', 2); //status 2 = PUBLICADO
  
        
        foreach ($postpub1 as $publi) {
            $publicados1++;
        }
        foreach ($postpub2 as $publi) {
            $publicados2++;
        }


        foreach ($posts as $post => $value) {
            $postss++;
        }
            
        foreach ($tags as $tag) {
            $etiquetas++;
            
        }

        foreach ($users as $user) {
            $usuarios++;
        }   

        foreach ($categories as $category ) {
            $categorias++;
        }

        


        return view('admin.index', compact('tags', 'etiquetas', 
                                            'users', 'usuarios', 
                                            'categories', 'categorias',
                                            'posts', 'postss',
                                            'postpub1', 'publicados1',
                                            'postpub2', 'publicados2'));
    }
}
