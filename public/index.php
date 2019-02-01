<?php 

define('DS',DIRECTORY_SEPARATOR); // Permite que la app funcione en windows y linux

// sera la ruta actual de nuestro proyecto
define('ROOT',dirname(dirname(__FILE__))); //File = Fichero actual

// Ejemplos de __FILE__
// echo "<pre>";
// echo (__FILE__)."<br>";
// echo dirname(__FILE__)."<br>";
// echo dirname(dirname(__FILE__))."<br>";
// echo "</pre>";

require('ROOT'.DS."src".DS."init.php");

echo Config::get('site.name')."<br>";

// require('VIEW_ROOT'.ROOT.DS."resources".DS);

App::run($_SERVER['REQUEST_URI']);

?>