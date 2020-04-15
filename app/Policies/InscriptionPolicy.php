<?php

namespace App\Policies;

use App\Models\Inscription;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InscriptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any inscriptions.
     *
     * @param User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasRole(['expert', 'superadmin']);
    }

    /**
     * Determine whether the user can view the inscription.
     *
     * @param User $user
     * @param Inscription $inscription
     * @return mixed
     */
    public function view(User $user, Inscription $inscription)
    {
        return $user->hasRole(['expert', 'superadmin']);
    }

    /**
     * Determine whether the user can view the detail of inscription.
     *
     * @param User $user
     * @param Inscription $inscription
     * @return mixed
     */
    public function viewDetails(User $user, Inscription $inscription)
    {
        return $user->hasRole(['superadmin']) or $user->id === $inscription->attribution;
    }

    /**
     * Determine whether the user can view the number of orders in shop.
     *
     * @param User $user
     * @return mixed
     */
    public function viewOrdersNumber(User $user)
    {
        return $user->hasRole(['expert', 'superadmin']);
    }

    /**
     * Determine whether the user can view the CA of orders in shop.
     *
     * @param User $user
     * @return mixed
     */
    public function viewOrdersCA(User $user)
    {
        return $user->hasRole(['superadmin']);
    }

    /**
     * Determine whether the user can create inscriptions.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the inscription.
     *
     * @param User $user
     * @param Inscription $inscription
     * @return mixed
     */
    public function update(User $user, Inscription $inscription)
    {
        return ($user->hasRole(['superadmin']) or $user->id === $inscription->attribution) and $inscription->status != 'abandonné';
    }

    /**
     * Determine whether the user can delete the inscription.
     *
     * @param User $user
     * @param Inscription $inscription
     * @return mixed
     */
    public function delete(User $user, Inscription $inscription)
    {
        //
    }

    /**
     * Determine whether the user can restore the inscription.
     *
     * @param User $user
     * @param Inscription $inscription
     * @return mixed
     */
    public function restore(User $user, Inscription $inscription)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the inscription.
     *
     * @param User $user
     * @param Inscription $inscription
     * @return mixed
     */
    public function forceDelete(User $user, Inscription $inscription)
    {
        //
    }

    /**
     *
     *
     * @param User $user
     * @param Inscription $inscription
     * @return mixed
     */
    public function notif(User $user, Inscription $inscription)
    {
        return $user->hasRole(['superadmin']) and $inscription->status == 'A attribuer';
    }
}
