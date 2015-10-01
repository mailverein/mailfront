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

	/**
	 * Scope a query to only include active aliases.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeActive($query)
	{
		return $query->where('enabled', 1);
	}
}
