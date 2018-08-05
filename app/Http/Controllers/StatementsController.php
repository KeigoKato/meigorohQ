<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StatementsCreateRequest;
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
        $page_count = 20;
        $stars = array();
        $sort = $request->sort;
        $order = $request->order;
        $items = Statement::orderBy($sort, $order)->paginate($page_count);
        $total = $items->total();
        $startCount = ($items->currentPage() - 1) * $page_count + 1;
        $endCount = $startCount + $items->count() - 1;
        foreach ($items as $item)
        {
            $stars[] = $item->reviews->sum('star');
        }
        $params = [
            'items'      => $items,
            'sort'       => $sort,
            'order'      => $order,
            'total'      => $total,
            'stars'      => $stars,
            'startCount' => $startCount,
            'endCount'   => $endCount,
        ];
        return view('statements.index', $params);
    }

    /**
     * Statementモデルのsearchアクション
     *
     * @param Request $request
     * @return statements/searchビュー
     */
    public function search(Request $request) {
        $sort = $request->sort;
        $stars = array();
        $keyword = $request->keyword;
        $page_count = 20;
        $order = $request->order;
        $items = Statement::where('title', 'like', '%'.$keyword.'%')
        ->orWhere('who', 'like', '%'.$keyword.'%')
        ->orWhere('statement', 'like', '%'.$keyword.'%')
        ->orderBy($sort, $order)
        ->paginate(20);
        $total = $items->total();
        $startCount = ($items->currentPage() - 1) * $page_count + 1;
        $endCount = $startCount + $items->count() - 1;
        foreach ($items as $item)
        {
            $stars[] = $item->reviews->sum('star');
        }
        $params = [
            'items'      => $items,
            'keyword'    => $keyword,
            'total'      => $total,
            'sort'       => $sort,
            'order'      => $order,
            'stars'      => $stars,
            'startCount' => $startCount,
            'endCount'   => $endCount,
        ];
        return view('statements.index', $params);
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
    public function create(StatementsCreateRequest $request) {
        $input = new Statement;
        $form = $request->all();
        unset($form["_token"]);
        $input->fill($form)->save();
        return redirect('/statements/index');
    }
}
