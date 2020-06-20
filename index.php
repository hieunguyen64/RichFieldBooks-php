<?php

$c = isset($_GET['controller']) ? $_GET['controller'] : 'ControllerHome';

//echo "controller = $c";
if (!is_file("controller/$c.php")) {
    exit;
}

// use composer autoload for dependencies
require_once getcwd() . '/vendor/autoload.php';

include "config.php";
include 'model/ModelDb.php';
include 'model/ModelBooks.php';
include "controller/ControllerHome.php";

$o = new $c(); //chay ham __construct()
