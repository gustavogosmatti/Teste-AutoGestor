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
    public function create(Usuario $user)
    {
        return $user->cargo === 'Gerente';
    }

    /**
     * Determine whether the user can update the marcas.
     *
     * @param  \App\User  $user
     * @param  \App\Marcas  $marcas
     * @return mixed
     */
    public function update(Usuario $user)
    {
        $cargos = array('Gerente', 'Operador nv. 3');
        return in_array($user->cargo, $cargos);
    }

    /**
     * Determine whether the user can delete the marcas.
     *
     * @param  \App\User  $user
     * @param  \App\Marcas  $marcas
     * @return mixed
     */
    public function delete(Usuario $user)
    {
        $cargos = array('Gerente');
        return in_array($user->cargo, $cargos);
    }
}
