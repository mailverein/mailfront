<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class domain extends Model
{
    protected $fillable = [
    	'fqdn',
    	'enabled',
    ];
}
