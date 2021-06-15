<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class BLogController extends Controller
{
    public function index(){ 
         $posts = Post::with('comments')->get();
        return view('welcome', compact('posts'));
    }

    public function addPost(){
        return view('posts.add');
    }

    public function postSubmit(Request $request){
        $data = $request->all();
        $post = new Post();
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return redirect()->route('home');
    }

    public function getSingleData($id)
    {
         $data = Post::with('comments')->find($id);
        return view('posts.show', compact('data'));
    }


    public function editPost($id)
    {
        $data = Post::find($id);
        return view('posts.edit', compact('data'));
    }

    public function updatePost(Request $request)
    {
        $data = $request->all();
        $post = Post::find($data['id']);
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return redirect()->route('home')->with('success', 'Post Updated Successfully');

    }
    public function deletePost($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect()->route('home')->with('success', 'Post Deleted Successfully');
    }

    public function addComment(Request $request)
    {

        $post = Post::find($request->id);
        $comment = new Comment();
        $comment->comments = $request->comment;
        $post->comments()->save($comment);
        return redirect()->route('home')->with('success', 'Comment Added Successfully');

    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('home')->with('success', 'Comment Added Successfully');

    }

}