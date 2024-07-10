<?php

    require("model/user.php");

    if(isset($_POST["add_user"])){

        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $email = htmlspecialchars($_POST["email"]);
        $mdp = htmlspecialchars($_POST["password"]);

        add_user($nom, $prenom, $email, $mdp);
    }

?>