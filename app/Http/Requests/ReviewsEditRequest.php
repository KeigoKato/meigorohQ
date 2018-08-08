<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewsEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment' => 'max:20',
        ];
    }

        /**
     * バリデーションのエラーメッセージ
     *
     * @return array
     */
    public function messages()
    {
        return [
            'comment.max' => '20文字以内で入力してください',
        ];
    }
}
