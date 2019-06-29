<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    protected $guarded = [];

    public function dashboard(){
    	return $this->belongsTo('\App\Dashboard');
    }
}
