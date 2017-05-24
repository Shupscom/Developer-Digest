<?php
namespace App\Http\Controllers;
use App\Category;
use App\Discussion;
use Illuminate\Http\Request;
use App\ContactMessage;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends  Controller{

    public  function getIndex(){
        return view('frontend.other.discussion');
    }

    public function  postDiscuss(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        $discuss = new Discussion();
        $discuss->name = $request['name'];
        $discuss->email = $request['email'];
        $discuss->message = $request['message'];
        $discuss->save();
        return redirect()->back()->with(['success'=>'Successfully Posted']);
    }

    public function getDiscuss(){
        $alldiscuss = Discussion::OrderBy('created_at','desc')->get();
        return view('admin.other.discuss',['alldiscuss'=> $alldiscuss]);
    }

}