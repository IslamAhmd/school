<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function levels(){
    	return $this->belongsToMany('App\Level', 'level_orders');
    }
}
