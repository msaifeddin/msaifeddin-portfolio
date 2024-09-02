<?php
    function connection("$serveur,$user,$mdp,$base"){
        $bdd = mysqli_connect("$serveur,$user,$mdp,$base");
        return($bdd);
    }
?>