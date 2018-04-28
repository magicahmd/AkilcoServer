<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function dishes()
    {
        return $this->belongsToMany(Dish::class);
    }
}
