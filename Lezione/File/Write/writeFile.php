<?php

    
    /*creo il vettore dei dati, ogni cella contiene un altro vettore
    con tante celle quanti sono i campi di ciascuna riga*/
    $dati = array(
        array("Samuele", "210", "220", "OGGI"),
        array("Filippo", "110", "120", "IERI")
    );

    
    //apro il file, specifico il path e la modalità (r = read, w = write)
    $file = fopen("file.csv", "w");

    /*aggiungo dati scorrendo il vettore */
    foreach($dati as $line){
        /*con il metodo scrivo la linea, per parametro passo
        il puntatore del file (cioè $file) e un vettore contenete i vari campi
        della singola riga (in fatti $line è una singola cella del vettore generale
        cioè un vettore contenente tutti i campi)*/
        fputcsv($file, $line);
    }

    //chiudo il file
    fclose($file);

    



?>