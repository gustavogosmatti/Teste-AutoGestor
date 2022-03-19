<?php

namespace App\Policies;

use App\User;
use App\Categoria;
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
        return $user->cargo === 'Gerente' or $user->cargo === 'Operador nv. 2' or $user->cargo === 'Operador nv. 3';
    }

    /**
     * Determine whether the user can create categorias.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the categoria.
     *
     * @param  \App\User  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function update(User $user, Categoria $categoria)
    {
        //
    }

    /**
     * Determine whether the user can delete the categoria.
     *
     * @param  \App\User  $user
     * @param  \App\Categoria  $categoria
     * @return mixed
     */
    public function delete(User $user, Categoria $categoria)
    {
        //
    }
}
