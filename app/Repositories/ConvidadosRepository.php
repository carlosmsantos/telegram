<?php

namespace App\Repositories;

use App\Http\Requests\ConvidadosFormRequest;

interface ConvidadosRepository
{
    public function index(ConvidadosFormRequest $request);
    public function validarAcesso(ConvidadosFormRequest $request);
    public function retornaAdultos(ConvidadosFormRequest $request);
    public function retornaCriancas(ConvidadosFormRequest $request);
}
