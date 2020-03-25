<?php

namespace App\Policies;

use App\Models\ { User, Ad };
use Illuminate\Auth\Access\HandlesAuthorization;

class AdPolicy
{
    use HandlesAuthorization;

    /**
     * Grant all abilities to administrator
     * 
     * @param \App\Models\User $user
     * @return bool
     */
    public function before (User $user) {
        
        if($user->admin)
            return true;
    }

    /**
     * Determine whether the user can view the ad
     * 
     * @param \App\Models\User $user
     * @param \App\Models\Ad $ad
     * @return mixed
     */
    public function show (?User $user, Ad $ad) {

        if($user && $user->id == $ad->user_id) {
            return true;
        }

        return $ad->active;
    }

    //Permet à l'auteur et aux admins d'ajouter une semaine à l'annonce
    public function manage (User $user, Ad $ad) {
        return $user->id == $ad->user_id;
    }

    /**
     * Determine whether the user can view the ad.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Ad  $ad
     * @return mixed
     */
    public function view(User $user, Ad $ad)
    {
        //
    }

    /**
     * Determine whether the user can create ads.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the ad.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Ad  $ad
     * @return mixed
     */
    public function update(User $user, Ad $ad)
    {
        //
    }

    /**
     * Determine whether the user can delete the ad.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Ad  $ad
     * @return mixed
     */
    public function delete(User $user, Ad $ad)
    {
        //
    }

    /**
     * Determine whether the user can restore the ad.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Ad  $ad
     * @return mixed
     */
    public function restore(User $user, Ad $ad)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the ad.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Ad  $ad
     * @return mixed
     */
    public function forceDelete(User $user, Ad $ad)
    {
        //
    }
}
