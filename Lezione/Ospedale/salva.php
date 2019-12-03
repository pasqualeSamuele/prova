<?php
    //inizializzo la sessione
    session_start();

    //potremmo anche usare:  $_SESSION["nomiPazienti"]["indiceNome"];
    $nomi = $_SESSION["nomiPazienti"];

    $indiceNome = "";
    if(isset($_REQUEST["indiceNome"])){
        $indiceNome = $_REQUEST["indiceNome"];
    }

    $pMax = "";
    if(isset($_REQUEST["pMax"])){
        $pMax = $_REQUEST["pMax"];  
    }

    $pMin = "";
    if(isset($_REQUEST["pMin"])){
        $pMin = $_REQUEST["pMin"];  
    }

    $dataDiagnosi = Date("d/n/Y g:i A");
    //$dataDiagnosi = strval(Date("d/n/Y g:i A"));
    //$dataDiagnosi = "OGGI";

    $fields = array($nomi[$indiceNome], $pMin, $pMax, $dataDiagnosi);


    $dati = letturaFile("file.csv");

    $lastIndex = count($dati);

    $dati[$lastIndex - 1] = $fields;

    //print_r($dati);


    scritturaFile("file.csv", $dati);


    echo "<form action=\"modulo.php\">
            Saved<br>
            <input type=\"submit\" id=\"btnGoBack\" value=\"Inserisci nuovo paziente\">
        </form>";








    function letturaFile($nameFile){
        //apro il file specificando il nome e la modalità (r = read, w = write)
        $file = fopen($nameFile, "r");
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
        
            /*carico sulla cella del vettore generale indicata dal contatore $content, quindi la singola cella del vettore
            generale contiene a sua volta un vettore contenente i vari campi di una sola riga*/
            $readLine[$cont] = $content;

            $cont++; //incremento il puntatore della cella del vettore generale
        }//fine ciclo while
        return $readLine;
    }


    function scritturaFile($nameFile, $dati){
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
    }

/*
    
    $dati = letturaFile();



    //$index = sizeof($line);
    $index = count($line);
    $line[$index] = $nomi[$indiceNome] . ";" . $pMin . ";" . $pMax . ";" . $data;

    scritturaFile($line);




    function letturaFile(){
        $array = array();

        //Open the file.
        $fileHandle = fopen("file.csv", "r");
        
        //Loop through the CSV rows.
        while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
            //Dump out the row for the sake of clarity.
            var_dump($row);
            $array[] = $row;
    }

        return $array;
    }


    function scritturaFile($line){
        //informazioni header per indicare che è un file csv
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="file.csv"');
    
        //salvataggio in file csv
        $fileOpen = fopen('php://output', 'wb');


        fputcsv($fileOpen, $line);

        //chiusura scrittura file csv
        fclose($fileOpen);
    }

     
/*
    echo "nome: " . $nomi[$indiceNome] . "<br>" . 
    "pressione minima: " . $pMin . "<br>" . 
    "pressione massima: " . $pMax . "<br>" . 
    "data: " . $data;*/
    
?>