<!-- Fichier : traitement.php -->

<?php
include 'db_function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $date_naissance = $_POST['date_naissance'];
    $pays = $_POST['listePays'];

    // Traitement des données (par exemple, enregistrement dans une base de données)
    $mysql = ConnexionPDO();
    if (SignUp_user($mysql, $nom, $prenom, $pseudo, $email, $date_naissance, $pwd, $pays)) {

        // Redirection vers une page de succès ou une autre action (page d'acceuil)
        header('Location: index.html');
    } else {
        echo ("error");
    }

    exit;
}

