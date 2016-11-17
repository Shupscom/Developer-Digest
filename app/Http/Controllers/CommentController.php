<?php
namespace App\Http\Controllers;
use App\Post;
use App\Comments;
use Illuminate\Http\Request;

 class CommentController extends Controller{
     public function getComments($post_id){
          $post = Post::find($post_id);
         $comments = Post::find($post_id)->comment;
         return view('admin.blog.comments',['post'=> $post,'comments'=> $comments]);
     }
 }