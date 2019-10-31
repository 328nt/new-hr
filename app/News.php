<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'idNews', 'id');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function authors()
    {
        return $this->belongsTo('App\User', 'author', 'id');
    }
}
