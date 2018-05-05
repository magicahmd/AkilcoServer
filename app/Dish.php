<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class)->withPivot('id', 'price');
    }
}
