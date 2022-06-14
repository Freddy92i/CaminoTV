<?php
    include('./app/connexionpdo.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/visualisation.css">

    <title>Ecran de Visualisation</title>

</head>
<body style="margin:0;">

    
    <!-- Affichage des éléments s'ils sont cochés -->
    <?php
    if ($item1_statut == "1") {
        echo '<div class="nompaire"> <span is="type-async" id="type-text">...</span>
        <span class="blinking-cursor">_</span> </div>';
        echo '<script  type="text/javascript" src="./js/script.js"></script>';
    }


    if ($item2_statut == "1") {
        echo '<p class="element2">je sais pas quoi mettre en Titre élément 2 mais ouais ça marche </p>';
    }

    if ($item3_statut == "1") {
        echo '<p class="element3">
        La Air Jordan 1 constitue la toute première paire de la lignée
        des modèles de Michael Jordan. Dévoilée en 1984 sous l’impulsion
        du designer Peter C. Moore, son prototype originel n’est autre que 
        la Nike Air Ship. Son créateur est également à l’origine de la conception
        des logos Jumpman et Wings, associés aux capacités hors-normes du joueur 
        professionnel sur les parquets. Lors de sa sortie, la Air Jordan 1 était 
        la toute première paire dotée de plusieurs couleurs à être portée sur les 
        terrains NBA ce qui était interdit. La ligue décida de bannir la paire des 
        parquets et de donner une amende à Jordan à chaque fois qu’il la porterait 
        lors des matchs de la saison régulière.</p>';
    }
    ?>

    <img class="bckgnd" src="./asset/background.jpg">

</body>
</html>