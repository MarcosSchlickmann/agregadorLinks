<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $guarded = [];

    public function dashboard(){
    	return $this->belongsTo('\App\Dashboard');
    }

    public function links(){
    	return $this->hasMany('\App\Link');
    }
}
