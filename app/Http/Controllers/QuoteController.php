<?php
namespace App\Http\Controllers;
use App\Quote;
use Illuminate\Http\Request;



class QuoteController extends Controller{

       public function  QuoteAdmin(){
           $quotes = Quote::all();
           return view('admin.other.quote',['quotes' => $quotes]);
       }

      public function QuotePost(Request $request){
          $this->validate($request,[
             'quote' => 'required',
              'author' =>  'required'
          ]);
          $quote = new Quote();
          $quote->quote = $request['quote'];
          $quote->author = $request['author'];
          $quote->save();
          return redirect()->back();

      }

      public  function QuoteDelete($quote_id){
          $quote = Quote::find($quote_id);
          $quote->delete();
          return redirect()->back();
    }
}