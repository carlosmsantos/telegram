<?php

namespace App\Repositories;
use App\Http\Requests\ConfirmacaoFormRequest;

interface ConfirmacaoRepository
{
    public function retornaConfirmacao(ConfirmacaoFormRequest $request);
    public function alterarSituacao(ConfirmacaoFormRequest $request);

}
