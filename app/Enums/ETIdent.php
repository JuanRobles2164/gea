<?php
namespace App\Enums;

class ETIdent extends AEnum{
    const CCIUDADANIA = 'N_1';
    const TIDENTIDAD = 'N_2';
    const PASAPORTE = 'N_3';
    const CEXTRANGERIA = 'N_4';
    static $items = [];

    private static function setItems()
    {
        self::$items[self::CCIUDADANIA] = new ETIdent(1, __('enums.cciudadania'));
        self::$items[self::TIDENTIDAD] = new ETIdent(2, __('enums.tidentidad'));
        self::$items[self::PASAPORTE] = new ETIdent(1, __('enums.pasaporte'));
        self::$items[self::CEXTRANGERIA] = new ETIdent(2, __('enums.cextranjeria'));
    }
    public static function getIndex($index){
        $items = [];
        if(self::$items == null || empty(self::$items)){
            self::setItems();
        }
        $items = self::$items;
        return $items[$index];
    }
    public static function getItems(){
        if(self::$items == null || empty(self::$items)){
            self::setItems();
        }    
        return self::$items;
    }
}
