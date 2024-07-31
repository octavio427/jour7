<?php

$texte = "Le % d'alcool du ";
$texte1 = "Cocktail Coco est de ";
$texte2 = "Cocktail Citron est de ";
$texte3 = "Cocktail des iles est de ";
$texte4 = " %";
$alcoco = 20 ;
$alcit = 30 ;
$aliles = 40 ;
$quantiter = 200 ;
$pourcentage = 100 ;

function Cocktail ($alcoco, $quantiter,$pourcentage){ 
    $resultat = ($alcoco/$quantiter)* $pourcentage  ;

    return $resultat;
}

echo $texte, $texte1, Cocktail ($alcoco, $quantiter,$pourcentage ), $texte4;
echo "<br><br/>";

echo $texte, $texte2, Cocktail ($alcit, $quantiter,$pourcentage), $texte4;
echo "<br><br/>";

echo $texte, $texte3, Cocktail ($aliles, $quantiter,$pourcentage ), $texte4;
echo "<br><br/>";

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