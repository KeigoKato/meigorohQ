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
        $params    = ['items' => $items];
        return view('statements.index', $params);
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
}
