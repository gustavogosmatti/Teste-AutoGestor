<?php

namespace App\Policies;

use App\User;
use App\Produto;
use App\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the produto.
     *
     * @param  \App\User  $user
     * @param  \App\Produto  $produto
     * @return mixed
     */
    public function view(Usuario $user)
    {
        return $user->cargo === 'Gerente' or $user->cargo === 'Operador nv. 1' or $user->cargo === 'Operador nv. 2' or $user->cargo === 'Operador nv. 3';
    }

    /**
     * Determine whether the user can create produtos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the produto.
     *
     * @param  \App\User  $user
     * @param  \App\Produto  $produto
     * @return mixed
     */
    public function update(User $user, Produto $produto)
    {
        //
    }

    /**
     * Determine whether the user can delete the produto.
     *
     * @param  \App\User  $user
     * @param  \App\Produto  $produto
     * @return mixed
     */
    public function delete(User $user, Produto $produto)
    {
        //
    }
}
