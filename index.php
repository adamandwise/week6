<?php
// turn on reporting errors
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();

require_once('vendor/autoload.php');

//instantiate the f3 Base Class( or the fat-free object)
$f3 = Base::instance();

//define a default route(328/application) with anonymous function
$f3 -> route('GET /', function(){


    //instantiate a view
    $view = new Template();
    echo $view -> render('views/info.html');
});

//run fat free
$f3->run();



?>