<?php
    /*il metodo $_GET restituisce il valore della variabile nome presente nell'URL*/
    echo "get: " . $_GET['nome'] . "<br>";
    /*il metodo $_REQUEST restituisce il valore della variabile nome presente nell'URL*/
    echo "request: " . $_REQUEST['nome'] . "<br>";

    /*CONTROLLO DEI VALORI*/

    /*metodo isset sulla variabile cognome*/
    /*
        Il metodo isset verifica se la variabile è stata settata o meno, cioè se è presente nell'url.
        al posto di scrivere $cognome = $_REQUEST["cognome"]; e poi isset($cognome); scriviamo subito isset($_REQUEST["cognome"]); per non 
        generare eccezioni.
        la variabile risulta settata se è presente nell'url anche se non è uguale a niente.
    */ 
    if(isset($_REQUEST["cognome"])){
        echo "is set" . "<br>"; //messaggio variabile settata
    }else{
        echo "isn't set" . "<br>";  //messaggio variabile non settata
    }

    /*metodo empty sulla variabile eta*/

    /*il metodo empty verifica se la variabile è piena... cioè restituisce
    FALSO: valore 0, NULL, variabile contenente una stringa
    TRUE: se contiene un valore numerico
    */
  
   if(empty($_GET["eta"])){
       echo "è piena" . "<br>";  //messaggio variabile piena
   }else{
       echo "non è piena" . "<br>"; //messaggio variabile vuota
   }

   /*metodo is_null sulla variabile eta*/
   /*i metodo il_null verifica se il contenuto della variabile è nullo...
   ATTENZIONE! se la variabile non è definita rilancia una eccezione */
   if(is_null($_GET["eta"])){
       echo "is null" . "<br>";
   }else{
       echo "isn't null" . "<br>";
   }

   /*operatode null coalescing */
   /*è usato come fosse un isset e può essere usato a cascata */
   $nome = $_GET["ciao"] ?? "nome non inserito"; /*se il nome non c'è allora carico sulla variabile il valore dopo '??' */
   echo $nome . "<br>";  //output: nome non inserito perchè la variabile "ciao" non è istanziata
?>