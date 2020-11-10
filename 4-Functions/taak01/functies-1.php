


<!DOCTYPE html>
<html>
    <body>
        <?php

            function schrijfKleur($skleur)
            {
                echo "<div style= color:$skleur> Deze tekst is in de kleur $skleur</div> <br>";  
            }
            schrijfKleur("red");
            schrijfKleur("brown");
            schrijfKleur("blue");
            schrijfKleur("yellow");
        ?>
    </body>
</html>