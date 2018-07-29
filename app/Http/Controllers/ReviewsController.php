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
}
