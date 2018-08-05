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
            'comment' => 'required|max:15',
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
            'comment.required' => 'タイトルは必須です',
            'comment.max' => '15文字以内で入力してください',
        ];
    }
}
