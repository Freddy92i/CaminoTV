<?php
	try
    {
        // On se connecte à la base de donnée inscription avec le compte
        // localhost
         $bdd= new PDO('mysql:host=localhost;dbname=eid65sgs','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
   
   // Récupération de la table items
    
   $req = "SELECT * FROM items";
    $result = $bdd->query($req);

    // Initialisation des variables

    $item1_nom;
    $item2_nom;
    $item3_nom;
    $item1_statut;
    $item2_statut;
    $item3_statut;



    // Affectation des résultats 
   
    $i = 0;
    while($row = $result->fetch()) {
        if ($i == 0) {
            $item1_nom = $row['nom'];
            $item1_statut = $row['statut'];
        } else if ($i == 1) {
            $item2_nom = $row['nom'];
            $item2_statut = $row['statut'];
        } else {
            $item3_nom = $row['nom'];
            $item3_statut = $row['statut'];
        }
        $i++;
    }
?>