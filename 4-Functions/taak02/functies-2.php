<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bereken</title>
</head>
<body>
    <?php
    function rekenUit($getal1, $getal2, $getal3){
        $uitkomst = $getal1 + $getal2 + $getal3;
        return $uitkomst;
    }
    $antwoord= rekenUit(1,2,3);
    echo "1, 2 en 3 opgetelt = $antwoord"."<br>";
    $antwoord= rekenUit(4,5,1);
    echo "4, 5 en 1 opgetelt = $antwoord"."<br>";
    $antwoord= rekenUit(10,23,3);
    echo "10, 23 en 3 opgetelt = $antwoord";
 
    ?>



</body>
</html>