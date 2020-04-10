<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //
    protected $fillable = [

        'name',
        'member_number',
        'package_id',
        'payment_id',
        'first_name',
        'last_name',
        'address',
        'phone',
        'expired_date',
        'created_at'


    ];


    //setup relationship for packages

    public function package(){

        return $this->belongsTo('App\Packages');
    }


    //setup relationship for payments

    public function payments(){

        return $this->hasMany('App\Payments');
    }


    //placeholder picture for member
    public function memberPlaceHolder(){

        return "http://placehold.it/400x380";

    }
}
