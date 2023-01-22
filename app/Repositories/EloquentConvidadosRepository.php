<?php

namespace App\Repositories;

use App\Http\Requests\ConvidadosFormRequest;
use Illuminate\Support\Facades\DB;

class EloquentConvidadosRepository implements ConvidadosRepository
{
    public function index(ConvidadosFormRequest $request)
    {
        $codigo = $request->get('codigo');
        $convidado['results'] = DB::table('convidado')
            ->whereColumn([
                ['fonecelular', '=', $codigo],
                ['flgativo', '=', '0'],
            ])->get();
//            ->select('idconvidado','nome', 'qtdeadulto', 'qtdecrianca')
//            ->where('fonecelular', '=', $codigo)
//            ->whereNotIn('flgativo', [0])
//            ->get();
        return $convidado;

    }
}
