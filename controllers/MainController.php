<?php
namespace controllers;

use controllers\classes\Calculator;
use controllers\heritable\controller;
use model\AvailableCurrencies;
use model\History;

class MainController extends controller {

    public function index(){

        return view('calc');
    }

    public function history(){

        $historyOrders = History::limit(5)->latest('created_at')->get();
        return view('history', compact('historyOrders'));
    }
    public function settings(){
        $currencies = AvailableCurrencies::all();
        $historyOrders = History::latest('created_at')->get();
        return view('settings', compact('currencies','historyOrders'));
    }

    public function update_settings(){
        if($_POST){
            $post = $_POST;
            $count = json_encode(count($post));
            if($count<2){
                die(json_encode(
                    [
                        'err'=> 'Минимум 2 валюты должны быть активными'
                    ]
                ));
            }
            foreach (AvailableCurrencies::CURRENCIES_TEXTS as $item => $value){
                $columnData = isset($post[$value]) ? 1 : 0;
                AvailableCurrencies::where('name',$value)
                    ->update(['available'=>$columnData]);
            }
            die(json_encode(
                [
                    'calc'=> 'Изменения сохранены'
                ]
            ));
        }
    }

    public function calculated(){
        if($_POST){
            $error = $this->validate();
            if($this->validate()){
                die(json_encode(
                    [
                        'err'=> $error
                    ]
                ));
            }
            $calc = new Calculator($_POST['from'],$_POST['to'],$_POST['value']);
            $result = $calc->calculate();

            History::createNew(
                $_POST['from'],
                $_POST['to'],
                $_POST['value'],
                $result
            );

            if($_POST['to']==AvailableCurrencies::CURRENCIES_TEXTS[AvailableCurrencies::BTC]&&
               AvailableCurrencies::checkMinSum($_POST['from'],$_POST['value'])){
                die(json_encode(
                    [
                        'err'=> 'Если сумма менее '.$_POST['value'].' '.$_POST['from'].' возвращаемое значение будет нечитабальным',
                        'calc' => $result.' '.$_POST['to']
                    ]
                ));
            }

            echo json_encode([
                'calc'=> $result.' '.$_POST['to']
            ]);


        }
    }

    public function validate(){
        $post =$_POST;
        if($post['from']=='-'){
            return 'Выберите валюту';
        }
        if($_POST['value']==''){

           return 'Заполните поле Сумма';
        }
        if(!is_numeric($_POST['value'])){
            return 'Заполните поле Сумма в верном формате';
        }

        return false;
    }

    public function getAvailableCurrencies(){
        $currencies = AvailableCurrencies::getAvailableCurrencies();
        $result = [];
        foreach ($currencies as $item =>$value){
            $result[$value] = AvailableCurrencies::CURRENCIES_MAIN_TEXTS[$value];
        }
        die(json_encode($result));
    }

    public function setAvailableCurrencies(){

    }


}
