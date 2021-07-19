<?php

namespace App\Http\Controllers;

use App\Enums\EHttpStatus;
use App\Factories\FactoryRepo;
use App\Models\Fase;
use Illuminate\Http\Request;

class FasesController extends Controller
{
    protected $res = ['status' => EHttpStatus::OK];
    protected $factoryRepo;
    public function __construct(){
        $this->factoryRepo = FactoryRepo::GetInstance();
    }
    public function index(Request $request){
        $fases = $this->factoryRepo::GetRepoInstance('FasesRepository')->getAll();
        return view('fases.index')->with(compact([
            'fases'
        ]));
    }
    public function createFase(Request $request){
        $fase = new Fase();
        $fase->fill($request->all());
        $this->factoryRepo::GetRepoInstance('FasesRepository')->create($fase);
        return $this->res;
    }
    public function findFase(Request $request){
        $fase = $this->factoryRepo::GetRepoInstance('FasesRepository')->find($request->id);
        return response()->json(['data' => $fase]);
    }
    public function getAll(){
        $fases = $this->factoryRepo::GetRepoInstance('FasesRepository')->getAll();
        return response()->json(['data' => $fases]);
    }
    public function updateFase(Request $request){
        $fase = new Fase();
        $this->FactoryRepo::GetRepoInstance('FasesRepository')->update($fase, $request);
        return $this->res;
    }
    public function deleteFase(Request $request){
        $this->FactoryRepo::GetRepoInstance('FasesRepository')->delete($request);
        return $this->res;
    }
}
