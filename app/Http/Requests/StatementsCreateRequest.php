<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatementsCreateRequest extends FormRequest
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
            'title' => 'required|max:20',
            'who' => 'required|max:15',
            'statement' => 'required|max:100|unique:statements,statement',
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
            'title.required' => 'タイトルは必須です',
            'title.max' => 'タイトルは20文字以内で入力してください',
            'who.required' => '名前は必須です',
            'who.max' => '名前は15文字以内で入力してください',
            'statement.required' => '語録は必須です',
            'statement.max' => '語録は100文字以内で入力してください',
            'statement.unique' => 'その語録はすでに登録されています',
        ];
    }
}
