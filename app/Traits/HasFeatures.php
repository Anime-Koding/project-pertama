<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\Feature;
use App\Models\FeatureGroup;
use App\Models\Visitor;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasFeatures
{
    public function giveFeature(...$features): self
    {
        $features = $this->getAllFeatures(
            Arr::flatten($features)
        );

        if (is_null($features)) {
            return $this;
        }

        $this->features()->saveMany($features);

        return $this;
    }

    public function haslayout($data): bool
    {
        return request()->session()->get("visitor")->group[0]->layout_id == $data;
    }

    public function removeFeature(...$features): self
    {
        $features = $this->getAllFeatures(
            Arr::flatten($features)
        );

        $this->features()->detach($features);

        return $this;
    }

    public function updateFeatures(...$features): self
    {
        $this->features()->detach();

        return $this->giveFeature($features);
    }

    public function hasFeature(string $feature): bool
    {
        return $this->hasFeatureThroughGroup(
            $feature,
        ) || $this->hasFeatureDirect(
            $feature,
        );
    }

    public function hasFeatureDirect(string $feature): bool
    {
        $feature = Feature::active()->name($feature)->first();

        if (is_null($feature)) {
            return false;
        }

        return $this->features->contains($feature);
    }

    public function hasFeatureThroughGroup(string $feature): bool
    {
        $feature = Feature::with(['groups'])->active()
            ->name($feature)->first();

        if (is_null($feature)) {
            return false;
        }

        foreach ($feature->groups as $group) {
            if ($this->groups->contains($group)) {
                return true;
            }
        }

        return false;
    }

    public function inGroup(...$groups): bool
    {
        foreach ($groups as $group)
        {
            $group = strtolower($group);
        }
        return !! FeatureGroup::active()
            ->whereIn('name', $groups)
            ->count();
    }

    public function leaveGroup(...$groups): self
    {
        $groups = $this->getAllGroups(
            Arr::flatten($groups)
        );

        $this->groups()->detach($groups);

        return $this;
    }

    public function joinGroup(...$groups): self
    {
        $groups = $this->getAllGroups(
            Arr::flatten($groups)
        );

        // TODO? Fix groups? Maybe?
        // dd($groups);

        if (is_null($groups)) {
            return $this;
        }

        $this->groups()->saveMany($groups);

        return $this;
    }

    public function addToGroup(...$groups): self
    {
        return $this->joinGroup(
            $groups,
        );
    }

    protected function getAllFeatures(array $features): Collection
    {
        foreach ($features as $feature) {
            $feature = strtolower($feature);
        }

        return Feature::active()->whereIn('name', $features)->get();
    }

    protected function getAllGroups(array $groups): Collection
    {
        foreach ($groups as $group) {
            $group = strtolower($group);
        }

        return FeatureGroup::active()->whereIn('name', $groups)->get();
    }

    public function groupHasFeature(string $featureName): bool
    {
        return $this->hasFeatureThroughGroup(
             $featureName
        );
    }

    protected function featureExists(string $featureName): bool
    {
        $exists = Feature::name($featureName)->first();

        return (is_null($exists)) ? false : true;
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(
            Feature::class,
            'feature_visitor'
        );
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(
            FeatureGroup::class,
            'feature_group_visitor',
        );
    }
}
