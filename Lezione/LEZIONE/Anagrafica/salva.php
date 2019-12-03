<?php
    $isset = false;

    if(isset( $_REQUEST["cognome"])){

        $isset = true;
       
    }else{

        $isset = false;

    }

    if(isset( $_REQUEST["nome"])){

        $isset = true;
       
    }else{

        $isset = false;

    }

    if(isset( $_REQUEST["eta"])){

        $isset = true;
       
    }else{

        $isset = false;

    }

    if($isset){
        $cognome = $_REQUEST["cognome"];
        $nome = $_REQUEST["nome"];
        $eta = $_REQUEST["eta"];

        //print_r($array); ---> stampa la struttura dell'array

        //echo "cognome: " . $cognome . ", nome: " . $nome . ", eta: " . $eta;

        $nuovaRiga = array($cognome, $nome, $eta);
        $righe = array(); 
        $righe = leggiFile("file.csv");
        $righe[count($righe) - 1] = $nuovaRiga;

        

        scriviFile("file.csv", $righe);

        print_r($righe);

       // require 'formAnagrafica.php';



        
    }else{
        echo "errore";
        require 'formAnagrafica.php';
    }


    function leggiFile($nameFile){
        $file = fopen($nameFile, "r");

        $contRighe = 0;
        $readRighe = array();

        while( !feof($file) ) {
            $readRighe[$contRighe] = fgetcsv($file);
            $contRighe++;
        }
        return $readRighe;
    }

    function scriviFile($nameFile, $righe){

        $file = fopen($nameFile, "w");

        foreach($righe as $riga){
            fputcsv($file, $riga);
        }

        fclose($file);
    }
    

    

?>