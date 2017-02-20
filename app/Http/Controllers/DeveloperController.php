<?php
namespace App\Http\Controllers;
use App\Developer;
use Illuminate\Http\Request;



class DeveloperController extends Controller{
        public function DeveloperAdmin(){
            $developers = Developer::all();
            return view('admin.other.developer',['developers'=> $developers]);
        }

    public function DeveloperPost(Request $request){
        $rules= ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'name' => 'required',
            'profession' => 'required',
            'email' => 'required|email',
            'advice' => 'required',
            'about' => 'required'
        ],$rules);
        $developer = new Developer();
        $developer->name = $request['name'];
        $developer->profession = $request['name'];
        $developer->email = $request['email'];
        $developer->advice = $request['advice'];
        $developer->about = $request['about'];
        if($file = $request->hasfile('file')) {
            $file = $request->file('file');
            $developer->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin/developer',$developer->picture);
        }
        $developer->save();
        return redirect()->back();



    }
}