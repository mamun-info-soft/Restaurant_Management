<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    protected $fillable = ['menu_name','menu_type','menu_category','menu_code','menu_description','menu_availability',
        'menu_unit','menu_delivery_time','menu_discount','menu_delivery_fee','menu_image'
        ];
}
