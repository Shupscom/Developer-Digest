<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use App\News;

class PostController extends Controller{

    public function getPostIndex(){
        $posts = Post::paginate(5);
        return view('admin.blog.index',['posts'=> $posts]);
    }

    public function getCreatePost(){
        $categories = Category::all();
        return view('admin.blog.create_post',['categories' => $categories]);
    }
    public function getEditPost($post_id){
        $categories = Category::all();
        $post = Post::find($post_id);
        return view('admin.blog.edit_post',['categories' => $categories,'post' => $post]);
    }
    public  function postCreatePost(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'title' => 'required|max:30',
            'author' => 'required',
            'category'=> 'required',
            'body' =>'required',
            'description' => 'required'
        ],$rules);
        $post = new Post();
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->category_id = $request['category'];
        $post->author_description = $request['description'];

       if($file = $request->hasfile('file')) {
           $file = $request->file('file');
           $post->picture = time().$file->getClientOriginalName();
           $file->move('img/uploads/admin/posts',$post->picture);
       }
        if($file = $request->hasfile('author_picture')) {
            $file = $request->file('author_picture');
            $post->author_picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/authors',$post->author_picture);
        }
        $post->save();
        return redirect()->route('admin.posts')->with(['success' => 'Post Successfully Created']);
        }
    public function postEditPost(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'title' => 'required|max:30',
            'author' => 'required',
            'category'=> 'required',
            'body' =>'required',
            'description' => 'required'
        ],$rules);
        $post = Post::find($request['post_id']);
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->category_id = $request['category'];
        $post->author_description = $request['description'];
        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $post->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/posts',$post->picture);
        }
        if($file = $request->hasfile('author_picture')) {
            $file = $request->file('author_picture');
            $post->author_picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/authors',$post->author_picture);
        }
        $post->update();
        return redirect()->route('admin.posts')->with(['success' => 'Post Successfully Edited']);

    }
    public function getDeletePost($post_id){
        $post = Post::find($post_id);
        $post->delete();
        return redirect()->route('admin.posts')->with(['success' => 'Post Successfully Deleted']);
    }

    public function getFrontendIndex(){
        $posts = Post::all();
        $categories = Category::all();
        $news = News::all();
        return view('frontend.blog.index' ,['posts'=> $posts,'categories'=>
            $categories,'news'=> $news]);
    }
}