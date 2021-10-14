<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function getData(){

    }
    public function createArticle(Request $request){
        $obj = new Article();
        $obj->url = $request->get('url');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->title = $request->get('title');
        $obj->category = $request->get('category');
        $obj->description = $request->get('description');
        $obj->detail = $request->get('detail');
        $obj->source = $request->get('source');
        $obj->save();
    }
    public function edit($id,Request $request)
    {
        $obj = Article::find($id);
        $obj->url = $request->get('url');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->title = $request->get('title');
        $obj->category = $request->get('category');
        $obj->description = $request->get('description');
        $obj->detail = $request->get('detail');
        $obj->source = $request->get('source');
        $obj->save();
    }

    public function update($id, Request $request)
    {
        $obj = Article::find($id);
        $obj->url = $request->get('url');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->title = $request->get('title');
        $obj->category = $request->get('category');
        $obj->description = $request->get('description');
        $obj->detail = $request->get('detail');
        $obj->source = $request->get('source');
        $obj->save();
    }
}
