<?php


$texte1 ="Mon ";
$poney = "Poney ";
$a = " a une taille de ";
$tblack = "1,40m ";
$tetoile = "1,70m";
$tprincesse = " 1,90m";
$b = " un poids de";
$pblack = "170kg";
$petoile = "150kg";
$pprincesse = "180kg";
$c = " une robe ";
$d = " et est herbivore.";
$prenom1 = "Black";
$prenom2 = "Etoile";
$prenom3 = "Princesse";
$robe1 = "black ";
$robe2 = "maron ";
$robe3 = "blanc";



function poney ($texte1, $poney, $prenom1, $a, $tblack, $b, $pblack, $c, $robe1, $d){
    $resultat = $texte1. $poney. $prenom1. $a. $tblack. $b. $pblack. $c. $robe1. $d;

        return $resultat ;

}


echo poney  ($texte1, $poney, $prenom1, $a, $tblack, $b, $pblack, $c, $robe1, $d);
echo "<br><br/>";

echo poney  ($texte1, $poney, $prenom2, $a, $tetoile, $b, $petoile, $c, $robe2, $d);
echo "<br><br/>";

echo poney  ($texte1, $poney, $prenom3, $a, $tprincesse, $b, $pprincesse, $c, $robe3, $d);
echo "<br><br/>";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testeindex</title>
</head>
<body>
    



</body>
</html>