<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurrence extends Model
{
    public function menus()
        {
            return $this->hasMany('App\Menu','recurrence_id');
        }
}
