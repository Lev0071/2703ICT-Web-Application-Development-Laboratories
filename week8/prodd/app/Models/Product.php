<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price'];
    function manufacturer(){
        return $this->belongsTo('App\Models\Manufacturer');
    }
    //use HasFactory;
}
