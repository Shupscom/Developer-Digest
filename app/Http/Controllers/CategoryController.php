<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller{

    public function getCategoryIndex(){
        $categories = Category::orderBy('created_at','asc')->paginate(5);
        return view('admin.blog.categories',['categories' => $categories]);
    }

    public function postCategory(Request $request){
        $this->validate($request,[
            'category' => 'required'
        ]);
        $category = new Category();
        $category->name = $request['category'];
        $category->save();
//        return redirect()->back();
        return response()->json(['new_name'=> $category->name ],200);
    }

    public function postEditCategory(Request $request){
        $this->validate($request,[
            'category' => 'required'
        ]);
        $category = Category::find($request['categoryId']);
        $category->name = $request['category'];
        $category->update();

        return response()->json(['new_name'=> $category->name ],200);

    }
    public function getCategoryDelete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        return redirect()->back();
    }
}