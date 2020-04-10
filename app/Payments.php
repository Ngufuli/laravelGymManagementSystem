<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    //

    protected $fillable = [

        'name',
        'price',
        'description',
        'is_paid',
        'payment_date',
        'member_id',
        'package_id'

    ];


    public function member()
    {
        return $this->belongsTo('App\Members');
    }

    public function package()
    {
        return $this->belongsTo('App\Packages');
    }


}
