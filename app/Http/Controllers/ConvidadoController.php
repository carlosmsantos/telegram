<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConvidadosFormRequest;
use App\Repositories\ConvidadosRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConvidadoController extends Controller
{
    public function __construct(private ConvidadosRepository $repository){

    }

    public function index(ConvidadosFormRequest $request, ConvidadosRepository $repository)
    {
        return $repository->index($request);
    }

    public function validarAcesso(ConvidadosFormRequest $request, ConvidadosRepository $repository)
    {
        return $repository->validarAcesso($request);
    }

    public function retornaCriancas(ConvidadosFormRequest $request, ConvidadosRepository $repository)
    {
        return $repository->retornaCriancas($request);
    }

    public function retornaAdultos(ConvidadosFormRequest $request, ConvidadosRepository $repository)
    {
        return $repository->retornaAdultos($request);
    }

    public function apenasPrincipal(ConvidadosFormRequest $request, ConvidadosRepository $repository)
    {
        return $repository->apenasPrincipal($request);
    }

    public function cancelarTodos(ConvidadosFormRequest $request, ConvidadosRepository $repository)
    {
        return $repository->cancelarTodos($request);
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
