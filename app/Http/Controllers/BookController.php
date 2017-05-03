<?php
namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



 class BookController extends Controller{
     public function Bookadmin(){
         $books = Book::all();
        return view('admin.other.books',['books'=> $books]);
    }
     public function postBook(Request $request){
         $this->validate($request,[
             'title' => 'required',
//             'file' => 'required|image',
             'link' => 'required',
             'description' => 'required'
         ]);
         $book = new Book();
         $book->title = $request['title'];
         $book->link = $request['link'];
         $book->description = $request['description'];
         if($request->hasFile('file')){
             $image = $request->file('file');
             $filename = time().'.'.$image->getClientOriginalExtension();
             $location = public_path('img/'.$filename);
             Image::make($image)->save($location);
             $book->coverpage = $filename;
         }
         $book->save();
         return redirect()->back();
     }
         public function EditBook(Request $request){

         }
       public function bookDelete($book_id){
         $book = Book::find($book_id);
         $book->delete();
         return redirect()->back();
     }
}