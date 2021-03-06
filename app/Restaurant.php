<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function tables()
    {
        return $this->hasMany(Table::class);
    }
}
