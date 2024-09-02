<?php
    //la connexion à la base de données
    $connect2 = connection ($serveur,$user,$mdp,$base);
    //Affichage des infos saisis dans le formulaire
    echo $_GET["nom"];
    echo $_GET["prenom"];
    echo $_GET["mail"];
    echo $_GET["numTel"];