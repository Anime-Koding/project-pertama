<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait UserScopes
{
    public function scopeMyData($query)
    {
        $id = Auth::id() ?? 1;
        return $query->where('user_id', $id);
    }
}
