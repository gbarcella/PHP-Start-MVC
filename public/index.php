<?php

session_start();

define('URL_BASE', "http://localhost:8080/");

require '../vendor/autoload.php';

$app = new \App\Core\App();