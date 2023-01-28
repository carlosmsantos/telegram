<?php

namespace App\Repositories;

use App\Http\Requests\ConvidadosFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EloquentConvidadosRepository implements ConvidadosRepository
{
    public function index(ConvidadosFormRequest $request)
    {
        $codigo = $request->get('codigo');
        $convidado['results'] = DB::table('convidado')
            ->select('idconvidado','nome', 'qtdeadulto', 'qtdecrianca', 'flgativo')
            ->where('fonecelular', '=', $codigo)
            ->where('flgativo', '<>', 0)
            ->get();
        return $convidado;
    }

    public function validarAcesso(ConvidadosFormRequest $request)
    {
        $codigo = $request->get('codigo');
        $acesso= DB::table('convidado')
            ->select(DB::raw('count(*) as total'))
            ->where('fonecelular', '=', $codigo)
            ->where('flgativo', '<>', 0)
            ->groupBy('idconvidado')
            ->get();

        if(count($acesso) > 0){
            $acesso = 1;
        }else{
            $acesso = 0;
        }

        return $acesso;
    }

    public function retornaAdultos(ConvidadosFormRequest $request){
        $totalpagantes = DB::table('convidado')
            ->select(DB::Raw('SUM(qtdeadulto) as total '))
            ->get();
        return $totalpagantes;
    }

    public function retornaCriancas(ConvidadosFormRequest $request){
        $totalcrianca = DB::table('convidado')
        ->select(DB::Raw('SUM(qtdecrianca) as total '))
        ->get();
        return $totalcrianca;
    }

    public function apenasPrincipal(ConvidadosFormRequest $request)
    {
        DB::update('update convidado set qtdeadulto = 1, qtdecrianca = 0
        where fonecelular = ?',[$request->codigo]);
    }

    public function cancelarTodos(ConvidadosFormRequest $request)
    {
        DB::update(
            'update convidado set flgativo = 0
        where fonecelular = ?',[$request->codigo]);
    }
}
