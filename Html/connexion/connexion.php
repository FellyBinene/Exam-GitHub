<?php
try
    {
        $connexion = new PDO('mysql:host=localhost;dbname=authentic design','root','');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
?>