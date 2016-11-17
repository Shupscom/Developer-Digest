<?php
namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{

    public function getIndex()
    {
        $category = Category::all();
        return view('frontend.other.contact',['categories'=> $category]);
    }

}