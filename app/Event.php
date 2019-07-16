<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['urlToImage','title','description'];

     public $timestamps  = false ;
}
