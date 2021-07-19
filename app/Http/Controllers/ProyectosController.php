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
    public function createProyecto(Request $request){
        $proyecto = new Proyecto();
        $proyecto->fill($request->all());
        $this->factoryRepo::GetRepoInstance('ProyectoRepository')->create($proyecto);
        return $this->res;
    }
    public function findProyecto(Request $request){
        $proyecto = $this->factoryRepo::GetRepoInstance('ProyectoRepository')->find($request->id);
        return response()->json(['data' => $proyecto]);
    }
    public function getAll(){
        $proyectos = $this->factoryRepo::GetRepoInstance('ProyectoRepository')->getAll();
        return response()->json(['data' => $proyectos]);
    }
    public function updateProyecto(Request $request){
        $proyecto = new Proyecto();
        $this->FactoryRepo::GetRepoInstance('ProyectoRepository')->update($proyecto, $request);
        return $this->res;
    }
    public function deleteProyecto(Request $request){
        $this->FactoryRepo::GetRepoInstance('ProyectoRepository')->delete($request);
        return $this->res;
    }
}
