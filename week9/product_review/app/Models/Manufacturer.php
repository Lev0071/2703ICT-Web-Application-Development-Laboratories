<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    //use HasFactory;
    protected $fillable = ['name'];
    // function products(){
    //     return $this->hasMany('App\Models\Product');
    // }
    function products() {
        return $this->hasMany('App\Models\Product');
    }
}