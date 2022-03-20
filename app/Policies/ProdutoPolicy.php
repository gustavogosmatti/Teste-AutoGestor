<?php

namespace App\Policies;

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
        $cargos = array('Gerente','Operador nv. 1', 'Operador nv. 2', 'Operador nv. 3');
        return in_array($user->cargo, $cargos);
    }

    /**
     * Determine whether the user can create produtos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Usuario $user)
    {
        return $user->cargo === 'Gerente';
    }

    /**
     * Determine whether the user can update the produto.
     *
     * @param  \App\User  $user
     * @param  \App\Produto  $produto
     * @return mixed
     */
    public function update(Usuario $user)
    {
        $cargos = array('Gerente','Operador nv. 1', 'Operador nv. 2', 'Operador nv. 3');
        return in_array($user->cargo, $cargos);
    }

    /**
     * Determine whether the user can delete the produto.
     *
     * @param  \App\User  $user
     * @param  \App\Produto  $produto
     * @return mixed
     */
    public function delete(Usuario $user)
    {
        $cargos = array('Gerente');
        return in_array($user->cargo, $cargos);
    }
}
