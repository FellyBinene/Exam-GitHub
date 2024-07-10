<?php

    require("model/userPoo.php");

    if(isset($_POST["add_user"])){

        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $email = htmlspecialchars($_POST["email"]);
        $mdp = htmlspecialchars($_POST["password"]);

        $user = new User($nom, $prenom, $prenom, $mdp);

        User::add_user($user);
    }

    if(isset($_POST["update_user"])){

        $id = htmlspecialchars($_POST["id"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $email = htmlspecialchars($_POST["email"]);
        $mdp = htmlspecialchars($_POST["password"]);

        $user = new User($nom, $prenom, $email, $mdp);

        User::update_user($id, $user);
    }

    if(isset($_GET["id_delete"])){

        $id = htmlspecialchars($_GET["id_delete"]);
        User::delete_user($id);

        echo"
        <script>
            window.location.href = 'membres.php';
        </script>
        ";
    }

?>