<?php

    require("connexion.php");


    // La création d'un bus
    function add_user($nom, $prenom, $email, $mdp){

        $insert = connexion()->prepare("INSERT INTO users(nom, prenom, email, password) values(?,?,?,?) ");
        $insert->execute(array($nom, $prenom, $email, $mdp));

        if($insert){
            return true;
        }
    }

    // La séléction de tous les bus
    function select_all_user(){

        $select = connexion()->query("SELECT * FROM users");
        return $select;
    }

    // La sélection d'un seul bus par Id
    function select_user_id($id){
        $select = connexion()->prepare("SELECT * FROM users WHERE id_user = ?");
        $select->execute(array($id));

        return $select;
    }

    // La modification d'un bus
    function update_user($id, $nom, $prenom, $email, $mdp){

        $update = connexion()->prepare("UPDATE users SET nom = ?, prenom = ? email = ?, password = ? WHERE id_user = ? ");
        $update->execute(array($nom, $prenom, $email, $mdp, $id));

        if($update){
            return true;
        }
    }

    // la supprission d'un bus
    function delete_user($id){

        $delete = connexion()->prepare("DELETE FROM users WHERE id_user = ?");
        $delete->execute(array($id));

        if($delete){
            return true;
        }
    }