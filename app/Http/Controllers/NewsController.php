<?php
namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class NewsController extends Controller{

    public function getNewsIndex(){
        $news = News::all();
        return view ('admin.other.news',['news'=> $news]);
    }
    public function getCreateNews(){
        return view('admin.other.create_news');
    }
    public function postCreateNews(Request $request){
        $rules = ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'title' => 'required|max:30',
            'author' => 'required',
            'body' =>'required'
        ],$rules);

        $news = new News();
        $news->title = $request['title'];
        $news->author = $request['author'];
        $news->body = $request['body'];
        if($file = $request->file('file')){
            $news->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin',$news->picture);
        }
        $news->save();
         return redirect()->route('news');

    }
    public function postEditNews(Request $request){
        $rules = ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'title' => 'required|max:30',
            'author' => 'required',
            'body' =>'required'
        ],$rules);
        $news = News::find($request['newsId']);
        $news->title = $request['title'];
        $news->author = $request['author'];
        $news->body = $request['body'];
        if($file = $request->hasFile('file')){
            $file = $request->file('file');
            $news->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin',$news->picture);
        }
        $news->save();
        return response()->json(['new_title'=> $news->title,'new_author'=> $news->author,'new_body'=> $news->body,'new_picture'
        => $news->picture],200);
    }

    public function getDeleteNews($delete_id){
       $news = News::find($delete_id);
        $news->delete();
        return redirect()->back();
    }
}