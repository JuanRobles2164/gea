<?php

namespace App\Repositories\Roles;

use App\Models\Rol;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class RolesRepository extends BaseRepository{
    private static $instance;
    private function __construct(){

    }
    public static function GetInstance(){
        if(!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function getModel()
    {
        return new Rol;
    }
    public function create($object)
    {
        $this->getModel()->create($object);
        $roles_db = DB::table('roles')->get();
        Cache::forever('roles', json_encode($roles_db));
    }
    public function alternateStatus($id, $status){
        DB::table('roles')
        ->where('id', $id)
        ->update([
            'activo' => $status
        ]);
    }
}
