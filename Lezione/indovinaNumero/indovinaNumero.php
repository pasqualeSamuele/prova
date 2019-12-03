<?php
    session_start();
    /*$valRandom = $_SESSION["valRandom"];
    $vita = $_SESSION["vita"];*/
    $val = $_REQUEST["val"];
    $message = "";

    if($val == $_SESSION["valRandom"]){
        echo "hai vinto!";
        //chiudere sessione
        session_destroy();
    }else{
        $_SESSION["vita"] = $_SESSION["vita"] - 1; 
        if($_SESSION["vita"] <= 0){
            echo "hai perso!";
        }else{
            if($val > $_SESSION["valRandom"]){
                $message = "il numero è minore";
            }else{
                $message = "il numero è maggiore";
            }
            echo "sbagliato!" . $message;        
            require 'indovinaNumero.html';
        }
        
    }
?>