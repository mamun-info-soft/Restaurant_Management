<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = ['name','price','agree','file','des','manager_id'];
}
