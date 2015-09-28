<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alias extends Model
{
	protected $fillable = [
		'localpart',
		'enabled',
		'mailboxid',
		'domainid',
	];
}
