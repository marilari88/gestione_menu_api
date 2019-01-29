<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $guarded = [];
    
    public function menus(){
        return $this->belongsToMany('App\Menu');
    }
}
