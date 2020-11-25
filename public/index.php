<?php

chdir('..');
ini_set("display_errors", 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => 'Temp123#$',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));

$capsule->setAsGlobal();

$capsule->bootEloquent();

spl_autoload_register(function ($class_name) {
    $path = str_replace('\\','/',$class_name.'.php');
    if (file_exists($path)){
        require_once $path;
    }
});



include_once 'Router.php';

session_start();


$obj = new Router();

function view($path,$arguments = [])
{
    $blade = new Blade('views', 'cache');
    echo $blade->make($path,$arguments)->render();
}

try {
    $obj->route();
}
catch (Exception $e){
    echo json_encode(
        [
            'message' => $e->getMessage(),
            'code'    => $e->getCode()
        ]
    );
    return false;
}





