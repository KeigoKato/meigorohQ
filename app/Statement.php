<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    // protected $table = 'statements';
    // protected $fillable = [
    //   'title', 'who', 'statement',
    // ];

    protected $guarded = array('id');

    public $timestamps = true;

    public function reviews() {
      return $this->hasMany('App\Review');
    }
}
