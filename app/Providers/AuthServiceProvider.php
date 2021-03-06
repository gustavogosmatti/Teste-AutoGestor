<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Usuario' => 'App\Policies\UsuarioPolicy',
        'App\Produto' => 'App\Policies\ProdutoPolicy',
        'App\Categoria' => 'App\Policies\CategoriaPolicy',
        'App\Marcas' => 'App\Policies\MarcaPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
