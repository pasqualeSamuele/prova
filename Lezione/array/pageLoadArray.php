<?php
    /*ricevo dal form quanti elementi dovranno essere caricati...
      ora carico un nuovo form tante caselle input quante saranno le celle dell'array*/
    $nElementi = $_REQUEST["nElementi"];  //salvo il numero sulla variabile
    //stampo l'apertura del form... in questo modo inizio a scrivere il file html
    echo "<form action=\"array.php\">";
    //ciclo for che si ripete per il numero di elementi da prendere in input
    for($i = 0; $i < $nElementi; $i++){ 
        /*tutto ciò che deve essere caricato nel file html da visualizzare è dentro il ciclo for...
        ora chiudo con il tag il linguaggio PHP e scrivo i tags del linguaggio HTML... tutto quello che è fuori viene ripetuto
        il numero di volte che gira il ciclo for*/ 
        ?> 
        Elemento: <input type="text" name="ciao"> <br>
    <?php  /*riapertura del tag del linguaggio PHP*/
      }//fine del ciclo for
    echo "<button>Carica</button></form>";  //aggiungo il bottone e chiudo il form precedentemente aperto
    

?>