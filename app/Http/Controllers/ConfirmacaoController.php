<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfirmacaoFormRequest;
use App\Repositories\ConfirmacaoRepository;
use Illuminate\Http\Request;

class ConfirmacaoController extends Controller
{
    public function __construct(private ConfirmacaoRepository $repository){

    }

    public function retornaConfirmacao(ConfirmacaoFormRequest $request, ConfirmacaoRepository $repository)
    {
        return $repository->retornaConfirmacao($request);
    }

    public function alterarSituacao(ConfirmacaoFormRequest $request, ConfirmacaoRepository $repository)
    {
        return $repository->alterarSituacao($request);
    }

}
