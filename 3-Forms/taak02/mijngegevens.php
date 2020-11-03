<!DOCTYPE html>
    <html>
        <head>
        <style>
        body{
            background-color: <?php echo $_POST["lievelingskleur"];?>
        }
        </style>
        </head> 
            <body>  
                <?php
                    echo $_POST["Voornaam"]."<br>".
                    $_POST["Achternaam"]."<br>".
                    $_POST["Klas"]."<br>".
                    $_POST["Leeftijd"]."<br>".
                    $_POST["Adres"]."<br>".
                    $_POST["Plaatsnaam"]."<br>".
                    $_POST["muziekband"]."<br>". 
                    $_POST["Geslacht"]."<br>".
                    $_POST["lievelingskleur"] ;  
            
                ?>


            </body> 
</html>
