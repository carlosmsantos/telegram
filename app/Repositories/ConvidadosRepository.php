<?php

namespace App\Repositories;

use App\Http\Requests\ConvidadosFormRequest;

interface ConvidadosRepository
{
    public function index(ConvidadosFormRequest $request);
}
