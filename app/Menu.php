<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];
    
    public function recurrences(){
        return $this->belongsTo('App\Recurrence');
    }

    public function dishes(){
        return $this->belongsToMany('App\Dish');
    }
}
