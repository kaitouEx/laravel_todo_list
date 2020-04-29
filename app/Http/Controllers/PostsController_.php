<?php 
namespace App\Http\Controllers;

class PostsController
{
    public function show($post){
        $posts = [
            "my-first-post" => "hello, this is my first blog post",
            "my-second-post" => "Now I am getting the hand of this blogging thing"
        ];
        
        if(! array_key_exists($post, $posts)){
            abort(404, 'sorry, that post was not found');
        }
    
    
        return view('post', [
           "post" => $posts[$post]
        ]);
    }
}
