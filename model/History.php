<?php

namespace model;

use model\extend\ModelMutator;

/**
 * Class History
 *
 * @property string from_currency
 * @property string to_currency
 * @property string exchange_sum
 * @property string final_sum
 *
 */


class History extends ModelMutator{

    protected $table='history';

    public static function createNew($from,$to,$sum,$final_sum){
        $historyOrder = new self();
        $historyOrder->from_currency = $from;
        $historyOrder->to_currency = $to;
        $historyOrder->exchange_sum = $sum;
        $historyOrder->final_sum = $final_sum;
        return $historyOrder->save();
    }
}
