<?php

namespace controllers\classes;

use model\AvailableCurrencies;

class Calculator
{
    private $from;
    private $to;
    private $value;

    private $equivalent;

    public function __construct($from,$to,$value){
        $this->from = $from;
        $this->to = $to;
        $this->value = $value;
        $this->getAllCurrencies();
    }

    public function calculate(){
        // Все апи которые находил зависели от курса гривны, по этому пришлось делать костыли

        $method = $this->toCamelCase();

        $precision = 2;
        if($this->to == AvailableCurrencies::CURRENCIES_TEXTS[AvailableCurrencies::BTC]){
            $precision = 8;
        }
        return round($this->$method(),$precision);

    }

    public function toCamelCase(){
        return strtolower($this->from).'To'.ucwords(strtolower($this->to));
    }

    public function getAllCurrencies(){
        $ch = curl_init('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $html = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($html, TRUE);

        $this->equivalent = [
            'uah_usd' => $response[0]['buy'],
            'uah_rub' => $response[2]['buy'],
            'usd_btc' => $response[3]['buy']
        ];

    }

    public function uahToRub(){
       return $this->value * (1 / $this->equivalent['uah_rub']);
    }

    public function uahToUsd(){
       return $this->value / $this->equivalent['uah_usd'];
    }

    public function rubToUah(){
       return $this->value * $this->equivalent['uah_rub'];
    }

    public function rubToUsd(){
       return $this->value / ($this->equivalent['uah_usd'] / $this->equivalent['uah_rub']);
    }

    public function usdToUah(){
       return $this->equivalent['uah_usd'] * $this->value;
    }

    public function usdToRub(){
        return $this->value * ($this->equivalent['uah_usd'] / $this->equivalent['uah_rub']);
    }

    public function btcToUah(){
        return $this->equivalent['uah_usd']*$this->equivalent['usd_btc'];
    }

    public function btcToRub(){
        return $this->value * $this->equivalent['usd_btc']*($this->equivalent['uah_usd'] / $this->equivalent['uah_rub']);
    }

    public function btcToUsd(){
        return $this->equivalent['usd_btc'];
    }

    public function rubToBtc(){
        return ($this->value/($this->equivalent['uah_usd']  / $this->equivalent['uah_rub']))/$this->equivalent['usd_btc'];
    }

    public function uahToBtc(){
        return ($this->value/$this->equivalent['uah_usd'])/$this->equivalent['usd_btc'];
    }

    public function usdToBtc(){
        return $this->value/$this->equivalent['usd_btc'];
    }





}
