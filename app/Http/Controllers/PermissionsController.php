<?php

namespace App\Http\Controllers;

use App\Enums\EPermisosRutas;
use App\Factories\FactoryRepo;
use App\Models\Permission;
use App\Util\Utilities;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    protected $fR;
    public function __construct()
    {
        $this->fR = FactoryRepo::GetInstance();
    }
    public function index(Request $request){
        $permisos_niveles = EPermisosRutas::getAllPermisos();
        $roles = $this->fR->GetRepoInstance('RolesRepository')->getAll();
        //$rutas_filtered = $this->fR->GetRepoInstance('RoutesRepository')->getAll();
        $rutas = $this->fR->GetRepoInstance('RoutesRepository')->getAll();
        //foreach($rutas_filtered as $r){
            //if($r->ruta_nombre != null){
                //array_push($rutas, $r);
            //}
        //}
        $permisos_roles = $this->fR::GetRepoInstance('PermissionsRepository')->getAll();
        return view('permisos.index')->with(compact(['permisos_roles', 'permisos_niveles', 'roles', 'rutas']));
    }

    public function crear(Request $request){
        $data = $request->except('_token');
        $this->fR->GetRepoInstance('PermissionsRepository')->create($data);
        return response()->json(['status' => 200]);
    }

    /**
     * @param Request La petición del usuario
     * Muestra los roles que tiene un usuario asignado al perfil para que escoja a qué index dirigirse
     * @return view[permisos_roles_usuario => {}]
     */
    public function indexRolesUsuario(Request $request){
        $permisos_roles_usuario = Utilities::getAllUserRoles();
        return view('')->with(compact('permisos_roles_usuario'));
    }

}
