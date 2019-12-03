<?php
    /*DICHIARAZIONE DI ARRAY*/
    
    /*1*/
    $colori = array('bianco', 'nero', 'verde', 'giallo', 'blu');
    echo $colori[2] . "<br>";  //output: verde

    /*2, stessa dichiarazione ma definiamo noi l'indice della cella*/
    $giorni = array(
        1 => "Lunedì",
        2 => "Martedì",
        3 => "Mercoledì",
        4 => "Giovedì",
        5 => "Venerdì",
        6 => "Sabato",
        7 => "Domenica"
    );

    echo $giorni[6] . "<br>"; //output: Sabato

    /*3, stessa dichiarazione ma creiamo un array associativo dove l'indice è una stringa*/
    $elementi = array(
        "Fe" => "Ferro",
        "Na" => "Sodio",
        "O" => "Ossigeno",
        "Al" => "Alluminio"
    );
    echo $elementi["Na"] . "<br>"; //output: Sodio

    /*4, stessa dichiarazione ma con sintassi diversa*/
    $formazione = array(
        1 => "Pasquale", "Rosso", "Salvatico", "Piroddi",
        "Allenatore" => "Criscuolo"
    ); /*in questo caso si parte dall'indice 1 = pasquale, 2 = rosso... e la cella "allenatore"
         contiene criscuolo ed è al fondo dell'array*/
         echo $formazione[1] . ", allenatore: " . $formazione["Allenatore"] . "<br>"; //output: Pasquale, allenatore: Criscuolo


    /*5, aggiunta di un solo elemento al vettore*/
    $nomi[] = "Samuele"; //aggiunge alla cella 0 il nome Samuele
    $nomi[2] = "Marco"; //aggiunge alla cella 2 il nome Marco... quindi la cella 1 è vuota

    echo $nomi[2] . "<br>"; //output: Marco
    /*se ora voglio aggiungere in coda un nome:*/
    $nomi[] = "Luca";
    echo $nomi[3] . "<br>"; //output: Luca


    /*OUTPUT DELL'INTERO ARRAY*/
    //stampo il vettore degli elementi
    echo "output vettore elementi: " . "<br>";
    foreach($elementi as $el){
        echo $el . "<br>";
    }

    //se voglio stampare anche la relativa chiave
    echo "output vettore elementi con la relativa chiave: " . "<br>";
    foreach($elementi as $chiave => $valore){
        echo $chiave . " => " . $valore . "<br>";
    }
?>