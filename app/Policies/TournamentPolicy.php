<?php

namespace App\Policies;

use App\User;
use App\Tournament;
use Illuminate\Auth\Access\HandlesAuthorization;

class TournamentPolicy {

    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tournament.
     *
     * @param  \App\User $user
     * @param  \App\Tournament $tournament
     * @return mixed
     */
    public function view(User $user, Tournament $tournament) {
        return $user -> id == $tournament -> organizer_id;
    }

    /**
     * Determine whether the user can create tournaments.
     *
     * @param  \App\User $user
     * @return mixed
     */
    public function create(User $user) {
        return true;
    }

    /**
     * Determine whether the user can update the tournament.
     *
     * @param  \App\User $user
     * @param  \App\Tournament $tournament
     * @return mixed
     */
    public function update(User $user, Tournament $tournament) {
        return $user -> id == $tournament -> organizer_id;
    }

    /**
     * Determine whether the user can delete the tournament.
     *
     * @param  \App\User $user
     * @param  \App\Tournament $tournament
     * @return mixed
     */
    public function delete(User $user, Tournament $tournament) {
        return $user -> id == $tournament -> organizer_id;
    }

    public function signUp(User $user, Tournament $tournament) {
        $participants = $tournament -> participants;
        return $tournament -> isFuture() && !$participants -> contains($user);
    }

    public function signOut(User $user, Tournament $tournament) {
        $participants = $tournament -> participants;
        return $participants -> contains($user);
    }
}
