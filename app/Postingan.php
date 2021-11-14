<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    //


    public function komen()
    {
        return $this->hasMany('App\Komen');
    }

}
