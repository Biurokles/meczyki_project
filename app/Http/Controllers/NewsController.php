<?php

namespace App\Http\Controllers;


use App\Models\Author;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function index()
    {

        $authors = Author::all();
        $news = News::all();
        return view('home',compact('news', 'authors'));
    }

    public function edit($id)
    {
        $news = News::find($id);
        $authors = Author::all()->keyBy('id');
        $authorsChecked = $news->authors()->get()->keyBy('id');
        return view('edit', compact('news','authors', 'authorsChecked'));
    }

    public function store(Request $request)
    {
        $news = News::create(['title'=>$request->title,'text'=>$request->text]);
        $news->authors()->sync($request->authors);
        return back();
    }

    public function delete(News $news)
    {
        $news->delete();
        return back();
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->update(['title'=>$request->title, 'text'=>$request->text]);
        $news->authors()->sync($request->authors);
        return redirect()->route('index');
    }

}
