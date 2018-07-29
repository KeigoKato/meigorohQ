<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{
    /**
     * Reviewモデルのcreateアクション
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request) {
        $input = new Review;
        $form = $request->all();
        \Debugbar::info($form);
        unset($form["_token"]);
        $input->fill($form)->save();
        \Debugbar::info($input);
        return redirect('/statements/index');
    }

    /**
     * Reviewモデルのupdateアクション
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request) {
        $form = $request->all();
        $statement_id = $request->statement_id;
        $review_id = $request->id;
        unset($form["_token"]);
        $review = Review::find($review_id)->fill($form)->save();
        return redirect('/statements/show?id='.$statement_id);
    }

    /**
     * Reviewモデルのdeleteアクション
     *
     * @param Request $request
     * @return void
     */
    public function delete(Request $request) {
        $review_id = $request->id;
        $statement_id = $request->statement_id;
        $review = Review::find($review_id)->delete();
        \Debugbar::info($request);
        return redirect('/statements/show?id='.$statement_id);
    }
}
