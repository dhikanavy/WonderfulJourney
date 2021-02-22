<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category(){
        return $this->hasOne('App\Category', 'id', 'categoryid');
    }

    public function user(){
        return $this->hasOne('App\User', 'id', 'userid');
    }
}
