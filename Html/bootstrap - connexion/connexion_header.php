<?php
    session_start();
    if (isset($_POST["valider"])){
        if (!empty($_POST["email"]) AND !empty($_POST["password"])){
            $email = htmlspecialchars($_POST["email"]);
            $mdp = sha1($_POST["password"]);
            $req = $connexion->prepare("SELECT * FROM users where email = ? AND password = ?");
            $req->execute(array($email, $mdp));
            $cpt = $req->rowCount();

            if ($cpt > 0){
                header("Location:../Accueil.php");
                $_SESSION ["email"] = $email;
            }else{
                $message = "Adressse Mail ou Mot de passe incorrect ?";
            }
        }else{
            $message="Remplissez tous les champs";
        }
    }
?>
