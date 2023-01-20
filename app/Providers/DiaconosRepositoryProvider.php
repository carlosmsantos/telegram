<?php

namespace App\Providers;

use App\Repositories\DiaconosRepository;
use App\Repositories\EloquentDiaconosRepository;
use Illuminate\Support\ServiceProvider;

class DiaconosRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        DiaconosRepository::class => EloquentDiaconosRepository::class
    ];
}
