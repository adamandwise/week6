<?php
// turn on reporting errors
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();

require_once('vendor/autoload.php');

//instantiate the f3 Base Class( or the fat-free object)
$f3 = Base::instance();

//define a default route(328/application) with anonymous function
$f3 -> route('GET /', function($f3){

    //add key-value pairs to the F3 "hive"
    $f3->set('username','jshmo');
    $f3->set('password',sha1('jshmo'));
    $f3->set('title','Working with Templates');
    $f3->set('favFood','Hotdogs');
    $f3->set('favColor','purple');
    $f3->set('favSeason','fall');
    $f3->set('temp',40);
    $f3->set('radius',10);

    $fruits = array("apple","banana","orange");
    $f3->set('fruits',$fruits);

    $f3->set('colors',array("red","blue","green"));


    //instantiate a view
    $view = new Template();
    echo $view -> render('views/info.html');
});

//run fat free
$f3->run();



?>