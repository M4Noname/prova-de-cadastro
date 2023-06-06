<?php

$host="localhost";
$cadastro="root";
$senha="";
$bcd="seu";

$connex=mysqli_connect($host,$cadastro,$senha,$bcd);
    if(!$connex){
        echo"deu erro Ó".mysqli_connect_error();
    }
    else{
        echo"deu foi boooom";
    }

?>