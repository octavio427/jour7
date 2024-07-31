<?php

$heures = 10 ;   // avant 16h="Bonjour" / apres 16h= "Ciao"
$nom = "Marc";

    function bonjour ($heures){

        if ($heures <16){     
        echo "Bonjour ";
    }
            else {
                echo "Ciao ";
            }
    }

bonjour ($heures);
echo $nom ;


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    

</body>
</html>