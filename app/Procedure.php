<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    
    public function form()
    {
        return $this->hasMany('App\Form', 'id_procedure', 'id');
    }
}
