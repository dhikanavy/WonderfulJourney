<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view(){
        $users = User::where('role', 'Member')->get();
        $articles = Article::all();
        return view('homepage')->with('articles', $articles)->with('users', $users);
    }

    public function deleteuser(Request $request){
        $user = User::where('id', $request->id)->first();
        $user->delete();
        return back();
    }

    public function viewDetail($articleID){
        $articles = Article::find($articleID);
        return view('articledetail')->with('articles', $articles);
    }

    public function percategory($categoryID){
        $category = Category::find($categoryID)->get();
        $articles = Article::where('categoryid', $categoryID)->get();
        return view('percategory')->with('category', $category)->with('articles', $articles);
        // return view('percategory');
    }
}
