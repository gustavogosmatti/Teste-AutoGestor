<?php

namespace App\Policies;

use App\User;
use App\Marcas;
use App\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class MarcaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the marcas.
     *
     * @param  \App\User  $user
     * @param  \App\Marcas  $marcas
     * @return mixed
     */
    public function view(Usuario $user)
    {
        return $user->cargo === 'Gerente' or $user->cargo === 'Operador nv. 3';
    }

    /**
     * Determine whether the user can create marcas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the marcas.
     *
     * @param  \App\User  $user
     * @param  \App\Marcas  $marcas
     * @return mixed
     */
    public function update(User $user, Marcas $marcas)
    {
        //
    }

    /**
     * Determine whether the user can delete the marcas.
     *
     * @param  \App\User  $user
     * @param  \App\Marcas  $marcas
     * @return mixed
     */
    public function delete(User $user, Marcas $marcas)
    {
        //
    }
}
