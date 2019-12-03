<!DOCTYPE html>
<html>

    <head>
        <title>ANAGRAFICA</title>
    </head>

    <body>
        <form action="salva.php" method="GET">
            Cognome &nbsp; <input type="text" size="12" maxlength="24" name="cognome"><br>
            Nome &nbsp;&nbsp; <input type="text" name="nome" size="12" maxlength="24"><br>
            Eta' &nbsp;&nbsp; <input type="number" name="eta"><br>

            <!-- SESSO, metto lo stesso nome cosi' puo selezionare solo un campo-->
            Maschio <input type="radio" value="maschio" name="sesso"><br>
            Femmina <input type="radio" value="femmina" name="sesso"><br>

            Data nascita<input type="date" name="nascita"> <br>


            Numeri preferiti: <br>

            1 <input type="checkbox" value="1" name="numeriPref[]"><br>
            2 <input type="checkbox" value="2" name="numeriPref[]"><br>
            3 <input type="checkbox" value="3" name="numeriPref[]"><br>

            Seleziona lo sport preferito <br>

            <select name="sport" size="1">
                <!--option value="calcio">calcio</option-->

                <?php
                //inizio php
                    $sportPreferiti = array('calcio', 'basket', 'pallavolo');
                    //scorro il vettore
                    foreach($sportPreferiti as $sport){
                        //stampo l'option della select
                        echo "<option value=\"" . $sport ."\">" . $sport ."</option>";
                    }

                    echo "</select><br>";

                    echo "<input type=\"reset\" value=\"cancella tutto\">" . "<br>";

                    //fine php
                ?>      


            <!--/select><br-->
            <!--input type="reset" value="cancella tutto"-->
            <input type="submit" value="ok"><br>

        </form>
    </body>

</html>