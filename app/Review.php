<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // このモデルで使用するテーブルを指定する。
    // 何も指定しなければモデル名の小文字かつ複数形のテーブルが使われる。
    // protected $table = 'statements';
    // protected $fillable = [
    //     'star', 'comment', 'statement_id'
    //   ];

    // 複数代入をそしするためにguardedを定義する。
    // guardedの反対はfillable
    protected $guarded = array('id');

    // created_atやupdated_atなどが自動で更新してほしくない場合はtimestampsをfalseにする。
    public $timestamps = true;

    public function statement() {
        return $this->belongsTo('App\Statement');
    }
}
