<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    protected $table = 'postingan';
    protected $fillable = ['isi', 'gambar'];


    public function user() {
        return $this->belongsTo('App\User');
    }

    public function like() {
        return $this->hasMany('App\Like');
    }

    public function komen() {
        return $this->hasMany('App\Komen');
    }

}
