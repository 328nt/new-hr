<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery_videos extends Model
{
    
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Comment', 'id_video', 'id');
    }
}
