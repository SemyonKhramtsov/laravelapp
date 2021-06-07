<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddNewArticleRequest;
use App\Models\Articles;

class AddNewArticleController extends Controller {

    public function Submit(AddNewArticleRequest $Req) {

        $articles = new Articles();
        $articles->header = $Req->post('header');
        $articles->content = $Req->post('content');
        $articles->save();

        return redirect()->route('Home')->with('success', 'Новость была добавлена!');
    }

    public function allData() {
        return view('Articles', ['data'=>Articles::all()]);
    }

    public function showOneArticle($id){
        return view('One-article', ['data'=>Articles::find($id)]);
    }

    public function updateArticle($id){
        return view('Update-Article', ['data'=>Articles::find($id)]);
    }

    public function updateArticleSubmit($id, AddNewArticleRequest $Req) {

        $articles = Articles::find($id);
        $articles->header = $Req->post('header');
        $articles->content = $Req->post('content');
        $articles->save();

        return redirect()->route('Articles-data-one', $id)->with('success', 'Новость была отредактирована!');
    }
    public function deleteArticle($id){
        Articles::find($id)->delete();
        return redirect()->route('Articles-data')->with('success', 'Новость была успешно удалена!');
    }
}
