<?php

namespace App\Http\Controllers;

use App\Enums\EHttpStatus;
use App\Factories\FactoryRepo;
use App\Http\Requests\CiclosCreate;
use AppApp\Models\Ciclo;
use Illuminate\Http\Request;

class CiclosController extends Controller
{
    protected $res = ['status' => EHttpStatus::OK];
    protected $factoryRepo;
    public function __construct(){
        $this->factoryRepo = FactoryRepo::GetInstance();
    }
    public function index(Request $request){
        $roles = collect(json_decode(cache('ciclos'), true));
        return view('ciclos.index')->with(compact([
            'ciclos'
        ]));
    }
    public function createCiclo(CiclosCreate $request){
        $ciclo = new Ciclo;
        $ciclo->fill($request->all());
        $this->factoryRepo::GetRepoInstance('CiclosRepository')->create($ciclo);
        return $this->res;
    }
    public function findCiclo(Request $request){
        $ciclo = $this->factoryRepo::GetRepoInstance('CiclosRespository')->find($request->id);
        return response()->json(['data' => $ciclo]);
    }
    public function getAllCiclos(){
        $ciclos = $this->factoryRepo::GetRepoInstance('CiclosRespository')->getAll();
        return response()->json(['data' => $ciclos]);
    }
    public function updateCiclo(CiclosCreate $request){
        $ciclo = new Ciclo;
        $this.FactoryRepo::GetRepoInstance('CiclosRepository')->update($ciclo, $request);
        return $this->res;
    }
    public function deleteCiclo(CiclosCreate $request){
        $this.FactoryRepo::GetRepoInstance('CiclosRepository')->delete($request);
        return $this->res;
    }


}
