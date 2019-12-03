<?php

    //apro il file specificando il nome e la modalità (r = read, w = write)
    $file = fopen("file.csv", "r");
    //contatore per le linee
    $cont = 0;
    //dichiaro il vettore che conterrà le linee
    $readLine = array();
    //leggo il file fino alla fine
    while(!feof($file)){
        //leggo il contenuto del file

        /*$content sarà un vettore con tanti valori 
        quanti sono i valori separati da ';' nella singola riga del file csv*/
        $content = fgetcsv($file); 
        /*conto quante sono le celle lette
        $count = count($content);*/

        /*carico sulla cella del vettore generale indicata dal contatore $content, quindi la singola cella del vettore
        generale contiene a sua volta un vettore contenente i vari campi di una sola riga*/
        $readLine[$cont] = $content;
        //scorro il vettore
   /*     for($i = 0; $i < $count; $i++){
            //echo $content[$i] . "\t"; potrei semplicemente stampare cella per cella
            //ogni cella viene salvata nel vettore generale
            $readLine[$line] = $content[$i];
           
        }*/

        $cont++; //incremento il puntatore della cella del vettore generale
        
        //echo "<br>";  vado a capo alla fine della riga
        

    }//fine ciclo while


    //stampo il vettore generale
    foreach($readLine as $val){ //scorro le righe
        foreach($val as $v){ //scorro all'interno della riga i vari campi
            echo $v;  //stampo campo per campo
        }
        echo "<br>";  //vado a capo perchè è finita la riga
    }
    //print_r($readLine);  //metodo che stampa il vettore



?>