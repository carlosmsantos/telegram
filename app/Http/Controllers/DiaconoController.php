<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiaconosFormRequest;
use App\Models\diacono;
use App\Repositories\DiaconosRepository;
use Illuminate\Http\Request;

class DiaconoController extends Controller
{

    public function __construct(private DiaconosRepository $repository)
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provisao(DiaconosFormRequest $request, DiaconosRepository $repository)
    {
        return $repository->provisao($request);
    }

    public function situacao(DiaconosFormRequest $request, DiaconosRepository $repository)
    {
        return $repository->situacao($request);
    }

    public function ordenacao(DiaconosFormRequest $request, DiaconosRepository $repository)
    {
        return $repository->ordenacao($request);
    }

    public function setor(DiaconosFormRequest $request, DiaconosRepository $repository)
    {
        return $repository->setor($request);
    }

    public function vicariato(DiaconosFormRequest $request, DiaconosRepository $repository)
    {
        return $repository->vicariato($request);
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
