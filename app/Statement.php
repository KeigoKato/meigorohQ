<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    protected $table = 'statements';
    protected $guarded = array('id');

    public $timestamps = true;
    protected $fillable = [
      'title', 'who', 'statement',
    ];
}
