<html>
    <head>
        <title>Ospedale</title>

    </head>


    <body>
        
        <h1>Ospedale</h1>
        <form action="salva.php" name="form" method="get">
            <select name="indiceNome">


            <?php
                session_start();
                $pazienti = array('-seleziona-', 'Aldo', 'Emma', 'Filippo', 'Giuseppe', 'Leonardo', 'Maria', 'Marina', 'Rosa');
                $_SESSION["nomiPazienti"] = $pazienti;
                $i = 0;
                foreach($pazienti as $paziente){
                    echo "<option value=\"" . $i . "\">" . $paziente . "</option>";
                    $i++;
                }
            ?>

              </select><br>
              Pressione Minima: <input type="text" name="pMin"><br>
              Pressione Massima: <input type="text" name="pMax"><br>
              <input type="submit" name="btnInvio" value="invio" >


        </form>
    </body>
</html>