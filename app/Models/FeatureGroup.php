<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Concerns\NormaliseName;
use App\Models\Builders\FeatureGroupBuilder;

class FeatureGroup extends Model
{
    use NormaliseName;

    protected $fillable = [
        'name',
        'description',
        'active',
        'user_id',
        'layout_id'
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    public function addFeature(Feature $feature): void
    {
        $this->features()->attach($feature);
    }

    public function hasFeature(string $featureName): bool
    {
        return $this->features->contains('name', $featureName);
    }

    public function removeFeature(Feature $feature): bool
    {
        return (bool) $this->features()->detach($feature->id);
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(
            Feature::class,
            'feature_feature_group',
        );
    }

    public function visitor(): BelongsToMany
    {
        return $this->belongsToMany(
            Visitor::class,
            'feature_group_visitor',
        );
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function newEloquentBuilder($query): FeatureGroupBuilder
    {
        return new FeatureGroupBuilder($query);
    }

    public function experience()
    {
        return $this->belongsToMany(Experience::class,"feature_group_modul_feature","feature_group_id","modul_feature_id")->wherePivot("type",1);
    }

    public function education()
    {
        return $this->belongsToMany(Education::class,"feature_group_modul_feature","feature_group_id","modul_feature_id")->wherePivot("type",2);
    }

    public function portfolio()
    {
        return $this->belongsToMany(Portfolio::class,"feature_group_modul_feature","feature_group_id","modul_feature_id")->wherePivot("type",5);
    }

    /**
     * Get the layout that owns the FeatureGroup
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function layout(): BelongsTo
    {
        return $this->belongsTo(Layout::class);
    }
}
