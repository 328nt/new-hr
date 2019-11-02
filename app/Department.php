<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'id_department', 'id');
    }
    public function form()
    {
        return $this->hasMany('App\Form', 'id_department', 'id');
    }
}
