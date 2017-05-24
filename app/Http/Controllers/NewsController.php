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
            'title' => 'required|max:60',
            'author' => 'required',
            'body' =>'required'
        ],$rules);

        $news = new News();
        $news->title = $request['title'];
        $news->author = $request['author'];
        $news->body = $request['body'];
        $news->slug = str_slug($news->title);
        if($file = $request->file('file')){
            $news->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin',$news->picture);
        }
        $news->save();
         return redirect()->route('admin.news');

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
        $news->slug = str_slug($news->title);
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

    /* Frontend Methods*/

      public function getIndex(){
          $news = News::OrderBy('created_at','desc')->get();
          $first_news = News::OrderBy('created_at','desc')->first();
          foreach($news as $new){
              $new->body = $this->shortenText($new->body,15);
          }
          return view('frontend.other.news',['news'=> $news,'first_news'=> $first_news]);
       }

      public function getSingle($news_slug){
          $new = News::where('slug',$news_slug)->first();
//          $new = News::find($news_slug);
          return view('frontend.other.news_single',['new'=>$new]);
      }


    /* Shorten Text */
    private function shortenText($text,$words_count){
        if(str_word_count($text,0) > $words_count){
            $words =  str_word_count($text,2);
            $pos = array_keys($words);
            $text = substr($text,0,$pos[$words_count]).'...';
        }
        return $text;
    }
}