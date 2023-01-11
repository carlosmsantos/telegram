<?php

namespace App\Http\Controllers;

use App\Models\diacono;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiaconoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provisao(Request $request)
    {
        $diaconos['results']  = DB::table('diacono')
            ->join('local', 'diacono.idlocal', '=', 'local.idlocal')
            ->join('provisao', 'provisao.idprovisao', '=', 'diacono.idprovisao')
            ->join('vicariato', 'vicariato.idvicariato', '=', 'local.idvicariato')
            ->join('situacao', 'situacao.idsituacao', '=', 'diacono.idsituacao')
            ->select('diacono.nome','diacono.imagemCLoud','diacono.matricula',
                DB::raw("DATE_FORMAT(diacono.ordenacao, '%Y') as ordenado"),
                DB::raw("CEILING(TIMESTAMPDIFF(YEAR, diacono.nascimento, CURDATE())) as  idade"),
            'situacao.descricao as situacao', 'provisao.descricao as provisao')
            ->orderBy('diacono.nome','ASC')
            ->get();
        return $diaconos;
    }

    public function situacao(){
        $situacao['results'] = DB::table('diacono')
            ->selectRaw('situacao.descricao as situacao, count(*) as total')
            ->leftJoin('situacao', 'diacono.idsituacao', '=', 'situacao.idsituacao')
            ->groupBy('situacao.descricao')
            ->orderBy('situacao.descricao','ASC')
            ->get();
        return $situacao;
    }

    public function ordenacao(){
        $ordenacao['results'] = DB::table('diacono')
            ->selectRaw('year(diacono.ordenacao) as ano, count(*) as total')
            ->groupBy('ano')
            ->orderBy('ano','DESC')
            ->get();
        return $ordenacao;
    }

    public function setor(){
        $setor['results'] = DB::table('diacono')
            ->selectRaw('local.setor as setor, count(*) as total')
            ->leftJoin('provisao', 'diacono.idprovisao', '=', 'provisao.idprovisao')
            ->join('local', 'diacono.idlocal', '=', 'local.idlocal')
            ->groupBy('setor')
            ->orderBy('setor','ASC')
            ->get();
        return $setor;
    }

    public function vicariato(){
        $vicariato['results'] = DB::table('diacono')
            ->selectRaw('vicariato.descricao as vicariato, count(*) as total')
            ->leftJoin('provisao', 'diacono.idprovisao', '=', 'provisao.idprovisao')
            ->join('local', 'diacono.idlocal', '=', 'local.idlocal')
            ->join('vicariato', 'vicariato.idvicariato', '=', 'local.idvicariato')
            ->groupBy('vicariato')
            ->orderBy('vicariato','ASC')
            ->get();
        return $vicariato;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
