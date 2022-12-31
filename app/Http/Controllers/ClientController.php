<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    // Render all posts from th api to getAllPost() class
    public function getAllPost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    // Renders a single post by id
     public function getPostById($id){
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
     }
    //  Added post and new post
    public function addPost(){
        $post = Http::post('https://jsonplaceholder.typicode.com/posts',[
            "userId" => 1,
            "title" => "New Post Title",
            "body" => "New Post Description"
        ]);
        return $post->json();
    }
    // Updated post
    public function updatePost(){
        $response  = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => "Updated Title",
            'body' => "Updated Description"
        ]);
        return $response->json();
    }

    // Delete post
    public function deletePost($id){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts'.$id);
        return $response->json();
    }
}
