<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait StatusScopes
{
    public function scopeEnable($query)
    {
        return $query->where('status', 1);
    }

    public function scopeDisable($query)
    {
        return $query->where('status', 0);
    }
}
