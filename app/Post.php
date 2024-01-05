<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'body',
        'title'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
