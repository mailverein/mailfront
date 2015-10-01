<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class domain extends Model
{
    protected $fillable = [
    	'fqdn',
    	'enabled',
    ];

    /**
     * Scope a query to only include active domains.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('enabled', 1);
    };
}
