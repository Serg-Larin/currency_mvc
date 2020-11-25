<?php


namespace model;

use model\extend\ModelMutator;

/**
 * Class History
 *
 * @property string
 *
 */


class AvailableCurrencies extends ModelMutator{

    public const UAH = 1;
    public const RUB = 2;
    public const USD = 3;
    public const BTC = 4;

    public const ON = 1;
    public const OFF = 0;

    public const MIN_SUM_TO_BTC =[
        self::CURRENCIES_TEXTS[self::UAH] => 55,
        self::CURRENCIES_TEXTS[self::RUB] => 150,
        self::CURRENCIES_TEXTS[self::USD] => 2
    ];


    public const CURRENCIES_TEXTS = [
        self::UAH => 'UAH',
        self::RUB => 'RUB',
        self::USD => 'USD',
        self::BTC => 'BTC'
    ];

    public const CURRENCIES_MAIN_TEXTS = [
        self::CURRENCIES_TEXTS[self::UAH] => 'ГРН',
        self::CURRENCIES_TEXTS[self::RUB] => 'РУБЛЬ',
        self::CURRENCIES_TEXTS[self::USD] => 'Доллар США',
        self::CURRENCIES_TEXTS[self::BTC] => 'Биткоин'
    ];

    public static function getAvailableCurrencies(){
        return self::where('available',self::ON)->pluck('name')->toArray();
    }

    public static function checkMinSum($needle,$value){
        if(array_key_exists($needle,self::MIN_SUM_TO_BTC)&&$value<=self::MIN_SUM_TO_BTC[$needle]){
            return true;
        }
        return false;
    }

}
