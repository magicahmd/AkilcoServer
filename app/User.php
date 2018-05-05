<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','email','password','id', 'phone_no'];
    public function roles(){
        return $this->belongsToMany(Role::class)->withPivot('role_id', 'restaurant_id');
    }

    public function worker_tables(){
        return $this->hasMany(Table::class, 'worker_id');
    }
}
