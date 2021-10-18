<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Exports\ExcelExports;
use App\Imports\Imports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ArticleController extends Controller
{
    //
    public function getData(){

    }
    public function listArticle(){
        return view('list',[
            'listArticle' => Article::all(),
        ]);
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

    public  function export_csv(){
//        return Article::all();
        $obj = new Article();
        $obj->url = 'ascasc';
        $obj->thumbnail = 'ascasc';
        $obj->title = 'ascasc';
        $obj->category = 'ascasc';
        $obj->description = 'ascasc';
        $obj->detail = 'ascasc';
        $obj->source = 'ascasc';
        return Excel::download($obj, 'article.xlsx');
    }

    public  function import_csv(Request $request){
        $path = $request->file('file')->getRealPath();
        Excel::import(new Imports, $path);
        return back();
    }
}
