<?php

namespace App\Policies\User;

use App\Models\FeatureGroup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeatureGroupPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FeatureGroup  $featureGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, FeatureGroup $featureGroup)
    {
        return $user->id == $featureGroup->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FeatureGroup  $featureGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, FeatureGroup $featureGroup)
    {
        return $user->id == $featureGroup->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FeatureGroup  $featureGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, FeatureGroup $featureGroup)
    {
        return $user->id == $featureGroup->user_id;
    }

    /**
     * Determine whether the user can assign the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FeatureGroup  $featureGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function assign(User $user, FeatureGroup $featureGroup)
    {
        return $user->id == $featureGroup->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FeatureGroup  $featureGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, FeatureGroup $featureGroup)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FeatureGroup  $featureGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, FeatureGroup $featureGroup)
    {
        //
    }
}
