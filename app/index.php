<?php
function greet(){
    $name = htmlspecialchars($_GET['name']);
     return "Hola ${name}!";
}
$greeting = greet();
