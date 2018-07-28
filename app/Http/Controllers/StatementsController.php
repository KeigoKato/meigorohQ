<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statement;

class StatementsController extends Controller
{
    /**
     * Statementモデルのindexアクション
     *
     * @param Request $request
     * @return statements/indexビュー
     */
    public function index(Request $request) {
        $items = Statement::all();
        return view('statements.index', ['items' => $items]);
    }

    /**
     * Statementモデルのsearchアクション
     *
     * @param Request $request
     * @return statements/searchビュー
     */
    public function search(Request $request) {
        $keyword = $request->keyword;
        $results = Statement::where('title', 'like', '%'.$keyword.'%')
        ->orWhere('who', 'like', '%'.$keyword.'%')
        ->orWhere('statement', 'like', '%'.$keyword.'%')
        ->get();
        return view('statements.search', ['results'=>$results, 'keyword'=>$keyword]);
    }

    /**
     * Statementモデルのshowアクション
     *
     * @param Request $request
     * @return Statements/showビュー
     */
    public function show(Request $request) {
        $id = $request->id;
        $item = Statement::find($id);
        return view('statements.show', ['item' => $item]);
    }

    public function add() {
        return view('statements.add');
    }

    public function create(Request $request) {
        $input = new Statement;
        $form = $request->all();
        unset($form["_token"]);
        $input->fill($form)->save();
        return redirect('/statements/index');
    }

}
