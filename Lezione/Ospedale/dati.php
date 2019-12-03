<?php
    $pazienti = array('Mario', 'Giuseppe', 'Filippo', 'Maria', 'Rosa', 'Emma', 'Aldo', 'Leonardo', 'Marina');
    $nomePaziente = $_REQUEST["nomePaziente"];
    $pMax = $_REQUEST["pMax"];
    $pMin = $_REQUEST["pMin"];
    $data = Date("d/n/Y g:i A");

    //informazioni header per indicare che è un file csv
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="file.csv"');

    //salvataggio in file csv
    $fileOpen = fopen('php://output', 'wb');
    $line = $nomePaziente . "," . $pMin . ", " . $pMax . ", " . $data;
    fputcsv($fileOpen, $line);

    //chiusura scrittura file csv
    fclose($fileOpen);

    //stampa dati a video
    /*echo "nome: " . $pazienti[$nomePaziente] . "<br>" . 
    "pressione minima: " . $pMin . "<br>" . 
    "pressione massima: " . $pMax . "<br>" . 
    "data: " . $data;*/
    echo $line;
?>