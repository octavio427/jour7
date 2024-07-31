<?php


$gras = $_GET ["<b>"] ??0;
$cesar = $_GET ["cesar"] ??0;
$laplateforme = $_GET ["laplateforme"] ??0;

$resultat = $_GET ["resultat"] ??0;
$decalage = 2;
$total = 0;
$text = "";


if (isset($_GET["srt"]) && isset ($_GET["fonction"])){
    $srt = $_GET ["srt"] ??0;  //saisi
    $fonction = $_GET ["fonction"] ??0;  //menu deroulant

        function gras ( $srt){
        return "<strong>".  $srt. "<strong/>";
        }


$resultat = '';

switch ($fonction) {
    case "gras";
        $resultat = gras($str);
        break;

    }

    echo "<p>Résultat : $result</p>";
     }


        //echo "<p>Résultat : $result</p>";

        //for ($i = 0; $i < strlen($str); $i++ ){
        //if ($str[$i] =="A") {

            //$str [$i] = "<b>"; 
 
/*switch ($resultat){
    case "gras";
    $total = ($srt && $gras)
    }*/
    
 // }
 //}
//$gras($str){
//}

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