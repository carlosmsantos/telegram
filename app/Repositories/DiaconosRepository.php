<?php

namespace App\Repositories;

use App\Http\Requests\DiaconosFormRequest;

interface DiaconosRepository
{
    public function provisao(DiaconosFormRequest $request);

    public function situacao(DiaconosFormRequest $request);

    public function ordenacao(DiaconosFormRequest $request);

    public function setor(DiaconosFormRequest $request);

    public function vicariato(DiaconosFormRequest $request);
}
