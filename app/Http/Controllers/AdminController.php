<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Role;


class AdminController extends Controller
{

    public function getDashboard(){

        $admins = Admin::paginate(5);
        return view('admin.blog.dashboard',['admins'=> $admins] );
    }

    public function getLogin(){
        $roles = Role::all();
        return view('admin.login',['roles'=>$roles]);
    }
    public function getCreateAdmin(){
        $roles = Role::all();
        return view('admin.create_Admin',['roles'=>$roles]);
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required',
            'role' => 'required'
        ]);
        if (!Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'role_id' => $request['role']])) {
            return redirect()->back()->with(['fail'=>'A problem occured']);

        }else{
            return redirect()->route('admin.dashboard')->with(['success'=> 'Welcome on board']);
        }
    }

        public function createAdmin(Request $request)
        {
            $rules = ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
            $this->validate($request, [
                'username' => 'required|unique:admins',
                'password' => 'required',
                'role' => 'required',
            ], $rules);

            $admin = new Admin();
            $admin->username = $request['username'];
            $admin->password = bcrypt($request['password']);
            $admin->role_id = $request['role'];
            if($file = $request->file('file')){
                $admin->picture = time().$file->getClientOriginalName();
                $file->move('img/uploads/admin',$admin->picture);
            }
            $admin->save();
            return redirect()->route('admin.dashboard')->with(['message'=>'Successfully Created']);
        }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function getEditAdmin($admin_id){
        $admin = Admin::find($admin_id);
        return view('admin.edit_admin',['admin' => $admin]);
    }

    public function getDeleteAdmin($admin_id){
        $admin = Admin::find($admin_id);
        $admin->delete();
        return view('admin.blog.dashboard');
    }

    public function postEditAdmin(Request $request){
        $rules = ['file' => 'required|max:' . config('app.maxFileSize') . '|mimes:' . config('app.allowedFiles')];
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ],$rules);

        $admin = Admin::find($request['admin_id']);
        $admin->username = $request['username'];
        $admin->password = $request['password'];
        $admin->role = $request['role'];
        if($file = $request->file('file')){
            $admin->picture = time().$file->getClientOriginalName();
            $file->move('img/uploads/admin',$admin->picture);
        }
        $admin->update();
        return redirect()->route('admin.dashboard')->with(['success'=> 'Successfully edited']);
    }

}
