<!-- Fichier : traitement.php -->

<?php
include 'db_functions.php';

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
    if(SignUp_user($nom, $prenom, $pseudo, $email, $pwd, $date_naissance, $pays)){
        
        // Redirection vers une page de succès ou une autre action (page d'acceuil)
    header('Location: index.html');
    }
    
    exit;
}
?>
