<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    //
    protected $fillable = [

        'name',
        'description',
        'price'


    ];


    public function payments()
    {
        return $this->hasMany('App\Payments');
    }

}
