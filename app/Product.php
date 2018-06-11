<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function specs()
    {
        return $this->hasMany('App\Spec');

    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
