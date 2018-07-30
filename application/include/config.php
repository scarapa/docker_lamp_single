<?php
if( ($_SERVER['SERVER_ADDR'] == "::1") || ($_SERVER['SERVER_ADDR'] == "localhost") ){
    $ip = $_SERVER['HTTP_HOST'];
}else{
    $ip = $_SERVER['SERVER_ADDR'];
}

$aux = substr( $_SERVER['REQUEST_URI'], strlen('/'));
if( substr( $aux, -1) == '/'){ $aux=substr( $aux, 0, -1); }
$link =explode( '/', $aux);

if(empty($link[0])){
    $main = "include/home.php";
}else{
    $main = "include/".$link[0].".php";
}

$conecta = Database::getInstance();