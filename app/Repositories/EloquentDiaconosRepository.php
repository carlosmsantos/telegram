<?php

namespace App\Repositories;

use App\Http\Requests\DiaconosFormRequest;
use Illuminate\Support\Facades\DB;

class EloquentDiaconosRepository implements DiaconosRepository
{
    public function provisao(DiaconosFormRequest $request)
    {
        $diaconos['results'] = DB::table('diacono')
            ->join('local', 'diacono.idlocal', '=', 'local.idlocal')
            ->join('provisao', 'provisao.idprovisao', '=', 'diacono.idprovisao')
            ->join('vicariato', 'vicariato.idvicariato', '=', 'local.idvicariato')
            ->join('situacao', 'situacao.idsituacao', '=', 'diacono.idsituacao')
            ->select('diacono.nome', 'diacono.imagemCLoud', 'diacono.matricula',
                DB::raw("DATE_FORMAT(diacono.ordenacao, '%Y') as ordenado"),
                DB::raw("CEILING(TIMESTAMPDIFF(YEAR, diacono.nascimento, CURDATE())) as  idade"),
                'situacao.descricao as situacao', 'provisao.descricao as provisao')
            ->orderBy('diacono.nome', 'ASC')
            ->get();
        return $diaconos;
    }

    public function situacao(DiaconosFormRequest $request)
    {
        $situacao['results'] = DB::table('diacono')
            ->selectRaw('situacao.descricao as situacao, count(*) as total')
            ->leftJoin('situacao', 'diacono.idsituacao', '=', 'situacao.idsituacao')
            ->groupBy('situacao.descricao')
            ->orderBy('situacao.descricao', 'ASC')
            ->get();
        return $situacao;
    }

    public function ordenacao(DiaconosFormRequest $request)
    {
        $ordenacao['results'] = DB::table('diacono')
            ->selectRaw('year(diacono.ordenacao) as ano, count(*) as total')
            ->groupBy('ano')
            ->orderBy('ano', 'DESC')
            ->get();
        return $ordenacao;
    }

    public function setor(DiaconosFormRequest $request)
    {
        $setor['results'] = DB::table('diacono')
            ->selectRaw('local.setor as setor, count(*) as total')
            ->leftJoin('provisao', 'diacono.idprovisao', '=', 'provisao.idprovisao')
            ->join('local', 'diacono.idlocal', '=', 'local.idlocal')
            ->groupBy('setor')
            ->orderBy('setor', 'ASC')
            ->get();
        return $setor;
    }

    public function vicariato(DiaconosFormRequest $request)
    {
        $vicariato['results'] = DB::table('diacono')
            ->selectRaw('vicariato.descricao as vicariato, count(*) as total')
            ->leftJoin('provisao', 'diacono.idprovisao', '=', 'provisao.idprovisao')
            ->join('local', 'diacono.idlocal', '=', 'local.idlocal')
            ->join('vicariato', 'vicariato.idvicariato', '=', 'local.idvicariato')
            ->groupBy('vicariato')
            ->orderBy('vicariato', 'ASC')
            ->get();
        return $vicariato;
    }

}
