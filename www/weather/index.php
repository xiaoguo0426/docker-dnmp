<?php

include './vendor/autoload.php';

$test = new \Xiaoguo\Weather\Weather(123123);

var_dump($test->getWeather('广州'));