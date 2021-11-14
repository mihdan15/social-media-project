<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    protected $table = 'komen';
    protected $fillable = [
        'user_id',
        'isi',
        'postingan_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function postingan(){
        return $this->belongsTo('App\Postingan')
    }
}
