<?php

namespace App\Repositories\Ciclos;

use App\Repositories\BaseRepository;
use AppApp\Models\Ciclo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CiclosRepository extends BaseRepository{
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
        return new Ciclo();
    }
}
