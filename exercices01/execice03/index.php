<?php

function gateaux ($nombresparts1, $coupegat1) {  
  $resultat = $nombresparts1 + $coupegat1 ;
  //$resultat = (($coupegat1 +1). $nombresparts>=1);

  return $resultat;

}

$texte = " Nombres de parts de gateaux : ";
$texte1 = " Nombres de coupes : ";
$nom1 = "Laurent";
$nom2 = "Luka";
$nom3 = "Julie";
$nombresparts1 = 2 + 1 ;
$nombresparts2 = 5 + 4 ;
$nombresparts3 = 9 + 8 ;
$coupegat1 = 6 ;  
$coupegat2 = 7 ;
$coupegat3 = 8 ;
//$ajoutparts = + 1 ;

// Laurent>>>
 echo $nom1, "<br/>";

 $resultat = gateaux ( $nombresparts1, $coupegat1 ); //2 parts, deux coupes donc 3 parts au final

 echo $texte . $resultat;  //coupes1
 echo "<br><br/>";

 $resultat = gateaux ($resultat, $coupegat1 ); // 4 parts au début, 6 coupes en plus, donc 10 parts au total
 echo $texte1 . $resultat;   //coupes1
 echo "<br><br/>","<br><br/>";


    //Luka>>>
    echo $nom2, "<br/>";

    $resultat = gateaux ( $nombresparts2, $coupegat2 ); //5 parts, 7 coupes donc 4 parts au final
    echo $texte . $resultat;   //coupes2
    echo "<br><br/>";

    $resultat = gateaux ( $resultat, $coupegat2 ); //7 parts au début, 6 coupes en plus, donc 13 parts au total
    echo $texte1 . $resultat;   //coupes2
    echo "<br><br/>","<br><br/>";

        //Julie>>>
        echo $nom3, "<br/>";

        $resultat = gateaux ( $nombresparts3, $coupegat3 ); //5 parts, 7 coupes donc 4 parts au final
        echo $texte . $resultat;   //coupes3
        echo "<br><br/>";

        $resultat = gateaux ( $resultat, $coupegat3 ); //8 parts au début, 6 coupes en plus, donc 13 parts au total
        echo $texte1 . $resultat;   //coupes3
        echo "<br><br/>","<br><br/>";

    /*//Luka>>>
    echo $nom2, "<br/>";
    //echo gateaux ($texte, $nombresparts );
    echo $texte, gateaux ( $resultat, $coupegat2 ); //2   parts de gateaux  2
    echo "<br><br/>";

    echo $texte1, gateaux ( $resultat, $coupegat2 );    //coupes2
    echo "<br><br/>","<br><br/>";

        //Julie>>>
        echo $nom3, "<br/>";
        echo $texte, gateaux ($resultat, $coupegat3 );  //3   parts de gateaux 3
        echo "<br><br/>";

        echo $texte1, gateaux ( $resultat, $coupegat3 );    //coupes3
        echo "<br><br/>","<br><br/>";

 //echo gateaux ($texte, $nombresparts, "<br><br/>", $texte1, $coupegat1 );*/

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