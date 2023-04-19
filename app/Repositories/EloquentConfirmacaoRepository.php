<?php

namespace App\Repositories;

use App\Http\Requests\ConfirmacaoFormRequest;
use Illuminate\Support\Facades\DB;

class EloquentConfirmacaoRepository implements ConfirmacaoRepository
{
    public function retornaConfirmacao(ConfirmacaoFormRequest $request)
    {
        $codigo = $request->get('codigo');
        $confirmacao = DB::table('confirmacao')
            ->select('flgsituacao')
            ->where('fonecelular', '=', $codigo)
            ->get();
        return $confirmacao;
    }

    public function alterarSituacao(ConfirmacaoFormRequest $request)
    {
        $situacao = $request->get('situacao');
        DB::update(
            'update confirmacao set flgsituacao = '.$situacao.' where fonecelular = ?',[$request->codigo]);
    }



}
