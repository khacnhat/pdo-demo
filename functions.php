<?php

function createDBConnection(){
    $url = "mysql:host=192.168.10.10;dbname=customerdb";
    $user = "homestead";
    $password = "secret";
    $db = new PDO($url, $user, $password);
    return $db;
}