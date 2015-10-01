<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
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

    /**
     * list all aliases for a domain
     */
    public function aliases()
    {
        return $this->hasMany('App\alias');
    }
}
