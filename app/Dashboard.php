<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $guarded = [];

    public function listings(){
    	return $this->belongsToMany('\App\Listing');
    }
}
