<?php
    session_start();
    $val = $_REQUEST["val"];

    if($val == $_SESSION["valRandom"]){
        echo "hai vinto!";
    }else{
        $_SESSION["vita"] = $_SESSION["vita"] - 1;
        if($_SESSION["vita"] <= 0){
            echo "hai perso";
        }else{
            echo "sbagliato, vite: " . $_SESSION["vita"];
            require 'indovinaNumero.html';
        }
    }
?>