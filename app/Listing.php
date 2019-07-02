<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $guarded = [];

    public function dashboards(){
    	return $this->belongsToMany('\App\Dashboard');
    }

    public function links(){
    	return $this->hasMany('\App\Link');
    }
}
