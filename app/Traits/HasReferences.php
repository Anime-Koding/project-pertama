<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Reference;

trait HasReferences
{
    public function references()
    {
        return $this->morphMany(Reference::class, 'referenceable');
    }
}
