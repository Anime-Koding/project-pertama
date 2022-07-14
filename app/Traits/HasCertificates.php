<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Certificate;

trait HasCertificates
{
    public function certificates()
    {
        return $this->morphMany(Certificate::class, 'certificatable');
    }
}
