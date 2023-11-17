<?php

namespace App\Policies;

use App\Models\RendezVous;
use App\Models\User;
use Illuminate\Auth\Access\Response;


/**
 * @author Boukhar Soufiane
 */

class RendezVousPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, RendezVous $rendezVous): bool
    {
        return $user->name === 'service social';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->name === 'service social';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, RendezVous $rendezVous): bool
    {
        return $user->name === 'service social';
    }

      /**
     * Determine whether the user can edit the model.
     */
    public function edit(User $user, RendezVous $rendezVous): bool
    {
        return $user->name === 'service social';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function destroy(User $user, RendezVous $rendezVous): bool
    {
        return $user->name === 'service social';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, RendezVous $rendezVous): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, RendezVous $rendezVous): bool
    {
        //
    }
}
