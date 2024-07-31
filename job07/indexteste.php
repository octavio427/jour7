<!DOCTYPE html>
<html>
<head>
    <title>La plateforme</title>
</head>
<body>

<h1>La plateforme</h1>

<form method="get" action="">
    <p>Saisi :</p>
    <input type="text" name="str" placeholder="Valeur" required/>

    <select name="fonction" id="fonction">
        <option value="">---Fonction---</option>
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="laplateforme">La plateforme</option>
    </select>

    <p>Confirmer</p>
    <button type="submit" name="resultat" value="resultat">Valider</button>
</form>

<?php
if (isset($_GET['str']) && isset($_GET['fonction'])) {
    $str = $_GET['str'];
    $fonction = $_GET['fonction'];

    
    function applyGras($str) {
        return '<strong>' . $str . '</strong>';
    }


    function applyCesar($str, $shift = 3) {
        $result = '';
        $shift = $shift % 26;  // Pour gérer des valeurs de décalage élevées
        for ($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            if (ctype_alpha($char)) {
                $asciiOffset = ctype_upper($char) ? ord('A') : ord('a');
                $char = chr((ord($char) + $shift - $asciiOffset) % 26 + $asciiOffset);
            }
            $result .= $char;
        }
        return $result;
    }

    function applyLaPlateforme($str) {
        return str_replace(' ', '_', $str);
    }

    $result = '';

    switch ($fonction) {
        case 'gras':
            $result = applyGras($str);
            break;
        case 'cesar':
            $result = applyCesar($str);
            break;
        case 'laplateforme':
            $result = applyLaPlateforme($str);
            break;
        default:
            $result = "Fonction non reconnue.";
            break;
    }

    echo "<p>Résultat : $result</p>";
}
?>

</body>
</html>