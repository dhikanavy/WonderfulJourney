<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function viewaddarticle(){
        $category = Category::all();
        return view('addarticle')->with('category', $category);
    }

    public function postarticle(Request $request){
        $user = Auth::user();
        
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $file = $request->file('image');
        $file->move('assets/', $request->image->getClientOriginalName());

        DB::table('articles')->insert([
          'title' => $request->title,
          'description' => $request->description,
          'image' => $request->image->getClientOriginalName(),
          'userid' => $user->id,
          'categoryid' => $request->category
        ]);

        return redirect('/');
    }

    public function viewyourarticles(){
        $user = Auth::user();
        $article = Article::where('userid', $user->id)->get();
        return view('viewyourarticles')->with('article', $article);
    }

    public function deleteblog($articleID){
        DB::table('articles')->where('id',$articleID)->delete();
        return redirect('viewyourarticles');
    }
}
