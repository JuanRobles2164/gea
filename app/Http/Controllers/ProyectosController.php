<?php

namespace App\Http\Controllers;

use App\Enums\EHttpStatus;
use App\Factories\FactoryRepo;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    protected $res = ['status' => EHttpStatus::OK];
    protected $factoryRepo;
    public function __construct(){
        $this->factoryRepo = FactoryRepo::GetInstance();
    }
    public function index(Request $request){
        $proyectos = $this->factoryRepo::GetRepoInstance('ProyectoRepository')->getAll();
        return view('proyecto.index')->with(compact([
            'proyectos'
        ]));
    }
    public function createCiclo(Request $request){
        $proyecto = new Proyecto();
        $proyecto->fill($request->all());
        $this->factoryRepo::GetRepoInstance('ProyectoRepository')->create($proyecto);
        return $this->res;
    }
    public function findCiclo(Request $request){
        $ciclo = $this->factoryRepo::GetRepoInstance('ProyectoRepository')->find($request->id);
        return response()->json(['data' => $ciclo]);
    }
    public function getAll(){
        $ciclos = $this->factoryRepo::GetRepoInstance('ProyectoRepository')->getAll();
        return response()->json(['data' => $ciclos]);
    }
    public function updateCiclo(Request $request){
        $ciclo = new Proyecto();
        $this->FactoryRepo::GetRepoInstance('ProyectoRepository')->update($ciclo, $request);
        return $this->res;
    }
    public function deleteCiclo(Request $request){
        $this->FactoryRepo::GetRepoInstance('ProyectoRepository')->delete($request);
        return $this->res;
    }
}
