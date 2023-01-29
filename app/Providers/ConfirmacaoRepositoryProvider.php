<?php

namespace App\Providers;

use App\Repositories\ConfirmacaoRepository;
use App\Repositories\EloquentConfirmacaoRepository;
use Illuminate\Support\ServiceProvider;

class ConfirmacaoRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        ConfirmacaoRepository::class => EloquentConfirmacaoRepository::class
    ];
}
