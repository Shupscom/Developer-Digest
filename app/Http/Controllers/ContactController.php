<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use App\ContactMessage;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{

    public function getIndex()
    {
        $category = Category::all();
        return view('frontend.other.contact',['categories'=> $category]);
    }

    public function postContact(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $contact = new ContactMessage();
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->message = $request['message'];
        $contact->save();
        return redirect()->back()->with(['success'=>'Successfully Sent']);
    }

}