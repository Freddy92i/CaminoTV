<?php
    include('./app/connexionpdo.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CaminoTV</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- colonne gauche--> 
<div class="colonne-gauche">

    <img src="./asset/logo.ico" class="camino-logo">

    <div class="dashboard">
        <h3 style="font-weight: 600;">
            Dashboard
        </h3>
        <a style="font-weight: 600;" href="./ecranvisualisation.php">
            Ecran de visualisation
        </a>
        
    </div>
</div>

<!-- colonne droite--> 
<div class="colonne-droite">

    <div class="panneau">
        <h2 class="titre"> Panneau de contrôle</h2>
    </div>

    <div class="card-global">
        
        <div class="cards">
            <div class="content">
                <h3>AJ1</h3>
                <h4 style="margin-bottom: 15px;">boite de gestion</h4>
                <h4>Nom de la paire</h4>
                <h3 style="margin-top: 10px;">Element 1 </h3>
                <hr class="divider">
                <div class="textbtn">
                    <h3>Afficher Le nom de la paire </h3>
                    <div class="bouton"> 
                        <label class="form-switch1">
                            <!-- Si le bouton vaut 1, l'élément 1 est affiché. -->
                    <?php
                    if ($item1_statut == 1) {
                        echo '<input id="checkbox1" type="checkbox" checked>';
                    } else {
                        echo '<input id="checkbox1" type="checkbox">';
                    }
                    ?>
                            <input id="checkbox1" type="checkbox">
                            <i></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards2">
            <div class="content">
                <h3>AJ1</h3>
                <h4>boite de gestion</h4>
                <h4>Titre de l'élément 2</h4>
                <h3 style="margin-top: 10px;">Element 2 </h3>
                <hr class="divider">
                <div class="textbtn">
                    <h3>Afficher photo AJ1 </h3>
                    <div class="bouton"> 
                        <label class="form-switch2">
                        <!-- Si le bouton vaut 1, l'élément 2 est affiché. -->
                    <?php
                    if ($item2_statut == 1) {
                        echo '<input id="checkbox2" type="checkbox" checked>';
                    } else {
                        echo '<input id="checkbox2" type="checkbox">';
                    }
                    ?>
                            <input id="checkbox2" type="checkbox">
                            <i></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards3">
            <div class="content">
                <h3>AJ1</h3>
                <h4>boite de gestion</h4>
                <h4>Titre de l'élément 3</h4>
                <h3 style="margin-top: 10px;">Element 1 </h3>
                <hr class="divider">
                <div class="textbtn">
                    <h3>Afficher photo AJ1 </h3>
                    <div class="bouton"> 
                        <label class="form-switch3">
                             <!-- Si le bouton vaut 1, l'élément 3 est affiché. -->
                    <?php
                    if ($item3_statut == 1) {
                        echo '<input id="checkbox3" type="checkbox" checked>';
                    } else {
                        echo '<input id="checkbox3" type="checkbox">';
                    }
                    ?>
                            <input id="checkbox3" type="checkbox">
                            <i></i>
                        </label>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>

</div>
 <script type="text/javascript">
        // On récupère les checkbox
        let checkbox1 = document.getElementById('checkbox1');
        let checkbox2 = document.getElementById('checkbox2');
        let checkbox3 = document.getElementById('checkbox3');
        // Si la valeur de la checkbox change ...
        checkbox1.addEventListener('change', function() {
            /// ... la page renvoie sur changer.php avec l'id de la checkbox
            document.location.href=`./app/settings.php?checkbox=${checkbox1.id}`, 2000;
        });
        // Même chose pour les autres checkbox
        checkbox2.addEventListener('change', function() {
            document.location.href=`./app/settings.php?checkbox=${checkbox2.id}`, 2000;
        });

        checkbox3.addEventListener('change', function() {
            document.location.href=`./app/settings.php?checkbox=${checkbox3.id}`, 2000;
        });

    </script>
</body>
</html>