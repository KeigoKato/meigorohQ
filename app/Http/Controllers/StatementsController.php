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
        if ($request->query()) {
            // クエリ文字列が存在する場合
            //受け取ったクエリをそのまま代入する
            $sort = $request->sort;
        } else {
            // クエリ文字列が存在しない場合
            // そーとの指定がない場合は投稿した日付で並べる
            $sort = 'created_at';
        }
        $items = Statement::orderBy($sort, 'asc')->paginate(10);
        $params = ['items' => $items, 'sort' => $sort];
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

    /**
     * Statementモデルのshowアクション
     *
     * @param Request $request
     * @return Statements/showビュー
     */
    public function show(Request $request) {
        $id = $request->id;
        $item = Statement::find($id);
        $reviews = $item->reviews;
        $num_star = $reviews->sum('star');
        $num_comment = count($reviews);
        $params = ['item' => $item, 'num_star' => $num_star, 'num_comment' => $num_comment];
        return view('statements.show', $params);
    }

    /**
     * Statementモデルのaddアクション
     *
     * @return void
     */
    public function add() {
        return view('statements.add');
    }

    /**
     * Statementモデルのcreateアクション
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request) {
        $input = new Statement;
        $form = $request->all();
        unset($form["_token"]);
        $input->fill($form)->save();
        return redirect('/statements/index');
    }
}
