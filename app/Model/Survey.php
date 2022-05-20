<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
     protected $fillable = [
       'name','phone','company','designation','code'
    ];
}
