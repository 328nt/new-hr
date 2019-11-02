<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Department', 'id_department', 'id');
    }
    public function procedure()
    {
        return $this->belongsTo('App\Procedure', 'id_procedure', 'id');
    }
}
