<?php
    include('connexionpdo.php');
    // Si le paramètre correspond à une checkbox ...
    if ($_GET['checkbox'] == "checkbox1") {
        // ... et que la checkbox n'est pas cochée ...
        if ($item1_statut == "0") {
            /// ... alors on modifie sa valeur à 1
            $bdd->query("UPDATE items SET statut = '1' WHERE nom = '$item1_nom'");
        } else {
            /// ... sinon on modifie sa valeur à 0
            $bdd->query("UPDATE items SET statut = '0' WHERE nom = '$item1_nom'");
        }
    }
    // Même chose pour les autres checkbox
    if ($_GET['checkbox'] == "checkbox2") {
        if ($item2_statut == "0") {
            $bdd->query("UPDATE items SET statut = '1' WHERE nom = '$item2_nom'");
        } else {
            $bdd->query("UPDATE items SET statut = '0' WHERE nom = '$item2_nom'");
        }
    }
    if  ($_GET['checkbox'] == "checkbox3") {
        if ($item3_statut == "0") {
            $bdd->query("UPDATE items SET statut = '1' WHERE nom = '$item3_nom'");
        } else {
            $bdd->query("UPDATE items SET statut = '0' WHERE nom = '$item3_nom'");
        }
    }
    // Redirection sur la page d'accueil
    header('Location: ../index.php');
    exit();

?>