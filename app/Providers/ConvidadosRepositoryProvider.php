<?php

namespace App\Providers;

use App\Repositories\ConvidadosRepository;
use App\Repositories\EloquentConvidadosRepository;
use Illuminate\Support\ServiceProvider;

class ConvidadosRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        ConvidadosRepository::class => EloquentConvidadosRepository::class
    ];
}
