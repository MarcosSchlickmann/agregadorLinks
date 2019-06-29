<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $guarded = [];

    public function lists(){
    	return $this->hasMany('\App\List');
    }
}
