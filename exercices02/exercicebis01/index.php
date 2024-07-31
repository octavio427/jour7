<?php

$vitesse60 = 40 ;
$vitesse70 = 70 ;
$vitesse80 = 80 ;
$vitesse90 = 90 ;
$vitesse110 = 110 ;

$totalvitesses = $vitesse60 + $vitesse70 + $vitesse80 + $vitesse90 + $vitesse110 ;

$vitessemaxi = 50 ;

$amende = array ($vitesse60,$vitesse70,$vitesse80,$vitesse90, $vitesse110);
    print_r ($amende);

$taille = count($amende);

    function vitesse ($vitesse){
        global $vitessemaxi;

        if($vitesse <= $vitessemaxi){
                echo "<br/> Votre vitesse est de ". $vitesse. " Km/h, Félicitation, moins de 50Km/h."."<br><br/>";
            }
            else{
                echo "Votre vitesse est de ". $vitesse. " Km/h, Vous avez une amende 'vitesse superieure a 50km/h'. "."<br><br/>";
            }

    }
                // vitesse cumulé
                for($i = 0; $i < $taille; $i++){
                    vitesse($amende[$i]);
                }
        
                echo "Toutes les vitesses cumulés sont de ". $totalvitesses. " Km/h."."<br><br/>";

                    // vitesses moyenne
                    if(($totalvitesses/$i) <= $vitessemaxi){
                        echo "<br/> Votre vitesse moyenne est de ".($totalvitesses/$i). " Km/h, Félicitation, moins de 50Km/h."."<br><br/>";
                    }
                    else{
                        echo "Votre vitesse moyenne est de ".($totalvitesses/$i). " Km/h, Vous avez une amende 'vitesse superieure a 50km/h'. "."<br><br/>";
                    }
  
        
//."<br><br/>"

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

<!-- autre variente de la fonction

$infraction = array (30,20,110,40,90);
$resultat = $infraction[0] + $infraction[1] + $infraction [2] + $infraction [3] + $infraction [4];
$moy = $resultat : count ($infraction);
echo "votre moyenne est de". $moy.<br/>;

if ($moy> 50){

echo "tu vas en taul";
}
else {
echo " bravo";
}

-->