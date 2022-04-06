<?php

declare(strict_types=1);

namespace App\Models\Builders;

use Illuminate\Database\Eloquent\Builder;
use App\Models\Builders\Concerns\QueryByName;
use App\Models\Builders\Concerns\HasActiveAndInactive;

class FeatureGroupBuilder extends Builder
{
    use QueryByName;
    use HasActiveAndInactive;
}
