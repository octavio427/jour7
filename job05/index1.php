<?php

function occurrences($str, $char){

    $cherche = 0 ;
     for ($i =0; $i < strlen($str); $i++ )
     if ($str [$i] == $char){
        $cherche ++ ;
     }

    return $cherche ;

}

$str = "Bonjour";
$char = "o";
$occurrence = occurrences ($str, $char);

echo "Le caractère ' $char '  apparaît $occurrence fois dans la chaîne ' $str '." ;



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