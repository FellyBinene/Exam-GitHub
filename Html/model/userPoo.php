<?php

require("connexion.php");

class User{
    // Déclarations des atributs
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $mdp;


    // La création du constructeur
    public function __construct($nom, $prenom, $email, $mdp)
    {
        // initialisation
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
    }


    public function getNom(){
        return $this->nom;
    }
    public function setNom($value){
        $this->nom = $value;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($value){
        $this->prenom = $value;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($value){
        $this->Email = $value;
    }

    public function getMdp(){
        return $this->mdp;
    }
    public function setMdp($value){
        $this->mdp = $value;
    }


    // La création d'un bus
    public static function add_user(User $user){

        $insert = connexion()->prepare("INSERT INTO users(nom, prenom, email, password) values(?,?,?,?) ");
        $insert->execute(array($user->getNom(), $user->getPrenom(), $user->getEmail(), $user->getMdp()));

        if($insert){
            return true;
        }
    }

    // La séléction de tous les bus
    public static function select_all_user(){

        $select = connexion()->query("SELECT * FROM users");
        return $select;
    }

    // La sélection d'un seul bus par Id
    public static function select_user_id($id){
        $select = connexion()->prepare("SELECT * FROM users WHERE id_user = ?");
        $select->execute(array($id));

        return $select;
    }

    // La modification d'un bus
    public static function update_user($id, User $user){

        $update = connexion()->prepare("UPDATE users SET nom = ?, prenom = ?, email = ?, password = ? WHERE id_user = ? ");
        $update->execute(array($user->getNom(), $user->getPrenom(), $user->getEmail(), $user->getMdp(), $id));

        if($update){
            return true;
        }
    }

    // la supprission d'un bus
    public static function delete_user($id){

        $delete = connexion()->prepare("DELETE FROM users WHERE id_user = ?");
        $delete->execute(array($id));

        if($delete){
            return true;
        }
    }
}