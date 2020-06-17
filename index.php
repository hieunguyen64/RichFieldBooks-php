<?php
use RichFieldBooks\Controllers\Home;

// use composer autoload for dependencies
require_once getcwd() . '/vendor/autoload.php';

include "config.php";

// include 'model/example.php';

// include 'views/example.php';

include "controllers/Home.php";

$home = new Home();
