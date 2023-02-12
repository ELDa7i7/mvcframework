<?php
use app\core\app;
require_once '../vendor/autoload.php';
define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
define("APP", ROOT . DS . "app");
define("VIEWS",APP."/views"); 
define("CONFIG",APP."config"); 
define("CORE",APP."core"); 
define("MODELS",APP."models"); 
define("CONTROLLERS",APP."controllers"); 

// config 
define("USERNAME","root"); 
define("DATABASE","mvc"); 
define("PASSWORD",""); 
define("DATABASE_TYPE","mysql"); 
define("HOST","localhost"); 

$app = new app();

