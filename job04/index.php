<?php


function calcule ($a,$operation,$b){

    switch($operation){
        case "addition":
        $resultat = $a + $b ;
        break;

            case "soustraction":
                $resultat = $a - $b ;
                break;

                case "multiplication":
                    $resultat = $a * $b ;
                    break;

                    case "division":
                        if ($b !=0){
                        $resultat = $a / $b ; 
                        }
                    else{
                        return "Division par zéro non autorisée.";
                    }

                        break;

                        case "modulo":
                            if ($b !=0){
                            $resultat = $a % $b ; 
                            }
                        else{
                            return "Modulo par zéro non autorisée.";
                        }
    
                            break;

                            return  $resultat;

    }

return  $resultat;

}

 echo "Le resultat de l'operation est de : ", calcule (6,"multiplication", 9) ;



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