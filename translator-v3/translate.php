<?php

// Inital configs
require_once "auto_load.php";

// $text = $_REQUEST['text'];
$text = "Olá mundo! Qual o seu nome?";

$op = Translator::translate($text);

$op = json_decode($op, TRUE);

if($op["code"] == 1) {     
    echo $op["msg"][0]["translations"][0]["text"];
}
else {
    echo $op["msg"];
}