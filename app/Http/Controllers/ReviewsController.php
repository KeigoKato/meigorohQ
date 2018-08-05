<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewsEditRequest;
use App\Review;

class ReviewsController extends Controller
{
    /**
     * Reviewモデルのcreateアクション
     *
     * @param Request $request
     * @return void
     */
    public function create(ReviewsEditRequest $request) {
        $input = new Review;
        $form = $request->all();
        unset($form["_token"]);
        $input->fill($form)->save();
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
        return redirect('/statements/show?id='.$statement_id);
    }
}
