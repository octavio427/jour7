<?php

function leetSpeak($str){
   
    for ($i = 0; $i < strlen($str); $i++ ){

        if (($str[$i] == "a") || ($str[$i] =="A")) {

            $str [$i] = "4";   
        }

            else if (($str[$i] == "b") || ($str[$i] =="B")) {

                    $str [$i] = "8";                        
            }
                else if (($str[$i] == "e") || ($str[$i] =="E")) {

                    $str [$i] = "3";                        
                }
                    else if (($str[$i] == "g") || ($str[$i] =="G")) {

                        $str [$i] = "6";                        
                    }
                        else if (($str[$i] == "l") || ($str[$i] =="L")) {

                            $str [$i] = "1";                        
                        }
                            else if (($str[$i] == "s") || ($str[$i] =="S")) {

                                $str [$i] = "5";                        
                            }
                                else if (($str[$i] == "t") || ($str[$i] =="T")) {

                                    $str [$i] = "7";                        
                                }
    }

    return $str;
}

$str = "Au la baleine Grandie sur les terres du Sud ";
$strModifie = leetSpeak($str);
echo "Au la baleine Grandie sur les terres du Sud ", "<br><br/>";
echo "Le résultat est: ", $strModifie, "<br><br/>";
echo " A = 4 <br/> B = 8 <br/> E = 3 <br/> G = 6 <br/> L = 1 <br/> S = 5 <br/ > T = 7";



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