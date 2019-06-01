<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Post extends Eloquent{

    protected $connection = 'mongodb';
    protected $guarded = [];
    

    public function user(){

        return $this->belongsTo('App\User', 'created_by');
    }
}
