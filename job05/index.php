<?php

function occurrences($str, $char){

    return substr_count ($str, $char);

}

$str = "Bonjour";
$char = "o";
$occurrence = occurrences ($str, $char);

echo "Le caractère ' $char '  apparaît $occurrence fois dans la chaîne ' $str '." ;
//echo "Le caractère ",  "' $char '  apparaît $occurrence fois dans la chaîne '$str'." ;
//echo "Le caractère ", " $char ", "apparaît ", $occurrence , " fois dans la chaîne ", "$str" ;


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