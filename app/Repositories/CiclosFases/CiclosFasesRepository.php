<?php

namespace App\Repositories\CiclosFases;

use App\Repositories\BaseRepository;
use App\Models\CicloFase;

class CiclosFasesRepository extends BaseRepository{
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
        return new CicloFase();
    }
}
