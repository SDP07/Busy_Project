<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterAddress extends Model
{
    //
     protected $table = 'dbo.masterAddressInfo';

    public $timestamps = false;

    protected $guarded = [''];
}
