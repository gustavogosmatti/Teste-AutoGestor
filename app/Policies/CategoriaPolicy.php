<?php

namespace App\Policies;

use App\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoriaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the categoria.
     *
     * @param  \App\User  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function view(Usuario $user)
    {
        $cargos = array('Gerente', 'Operador nv. 2','Operador nv. 3');
        return in_array($user->cargo, $cargos);
    }

    /**
     * Determine whether the user can create categorias.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Usuario $user)
    {
        return $user->cargo === 'Gerente';
    }

    /**
     * Determine whether the user can update the categoria.
     *
     * @param  \App\User  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function update(Usuario $user)
    {
        $cargos = array('Gerente', 'Operador nv. 2','Operador nv. 3');
        return in_array($user->cargo, $cargos);
    }

    /**
     * Determine whether the user can delete the categoria.
     *
     * @param  \App\User  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function delete(Usuario $user)
    {
        $cargos = array('Gerente');
        return in_array($user->cargo, $cargos);
    }
}
