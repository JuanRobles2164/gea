<?php

namespace App\Repositories\DisciplinaIteracion;

use App\Repositories\BaseRepository;
use App\Models\DisciplinaIteracion;

class DisciplinasRepository extends BaseRepository{
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
        return new DisciplinaIteracion();
    }
}
