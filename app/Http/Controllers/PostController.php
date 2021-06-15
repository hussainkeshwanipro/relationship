<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        $post = new Post();
        $post->title = 'post first';
        $post->body = 'post body first';
        $post->save();
        return $post->title.'created';
    }

    public function addComment($id){
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comments = 'first comments';
        $post->comments()->save($comment);
        return 'comment added to '.$post->title;
    }

    public function getData($id){
        return $comment = Post::find($id)->comments;
        
    }
}
