<?php
    session_start();
    $_SESSION["vita"] = 4;
    $_SESSION["valRandom"] = rand(0, 10);

    echo $_SESSION["valRandom"];


?>