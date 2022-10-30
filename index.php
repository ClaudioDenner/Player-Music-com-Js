<?php

$directorio = "C:\wamp64\www\PlayerMusic";
$comando = dir($directorio);




while( $arquivo = $comando ->read()){

    echo $arquivo."<br>";
    
};
