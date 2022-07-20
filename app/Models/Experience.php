<?php

namespace App\Models;

use App\Traits\HasCertificates;
use App\Traits\HasReferences;
use App\Traits\StatusScopes;
use App\Traits\UserScopes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Experience extends Model
{
    use HasFactory, UserScopes, StatusScopes, HasCertificates, HasReferences;

    protected $fillable = ["user_id", "job_title", "company_name", "from_date", "to_date", "detail", "status"];

    protected static function booted()
    {
        if (Auth::check()) {
            $user = Auth::user();

            //TODO: by role
            static::addGlobalScope('myData', function (Builder $builder) use ($user) {
                $builder->where('user_id', $user->id);
            });

            static::addGlobalScope('enable', function (Builder $builder) use ($user) {
                $builder->where('status', 1);
            });
        }
    }

    /**
     * Get the user that owns the Education
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function group_feature()
    {
        return $this->belongsToMany(FeatureGroup::class, "feature_group_modul_feature", "modul_feature_id", "feature_group_id")->wherePivot("type", 1);
    }
}
