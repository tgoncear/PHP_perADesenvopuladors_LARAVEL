<?php
function greet(){
    $name = htmlspecialchars($_GET['name']);
    return "Hola ${name}!";
}
function dd($param){
    var_dump($param);
    die();
}