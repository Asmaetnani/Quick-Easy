<?php
function ConnexionPDO(){
    include 'db_config.php';
    //ajouter le fichier qui contient les informations de la base de donnée
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $mdp);
        return $pdo;
    }catch(PDOException $e){
        print "Erreur de connexion PDO";
        return null;
        // pour tester la connexion 
    }
}

//connexion
function Login_user($mail, $pwd){
    try{
$req = ConnexionPDO() -> prepare('SELECT * FROM user Where  (pseudo = ? OR email = ?) AND mot_de_passe = ?;');
$req -> execute(array($mail, $mail, $pwd));
foreach ($req as $row) {
//$req : pour executer la requette , $row:ligne donc il va parcourir les ligne (d'apres la condition)
	return true;
}
}catch (PDOException $e) {
    print "Erreur !".$e -> getMessage();
    return false;
}
}

//s'inscrire
function SignUp_user($nom, $prenom, $pseudo, $email, $pwd, $date_naissance, $pays){
    try{
        $req = ConnexionPDO() -> prepare('insert into user(nom , prenom , pseudo, email,Date_de_naissance, mot_de_passe, pays) values(?,?,?,?,?,?,?);');
        $req -> execute(array($nom, $prenom, $pseudo, $email, $date_naissance, $pwd, $pays));
       return true;
    }catch(PDOException $e){
        print"Erreur !".$e -> getMessage();
        return false;
    }
}

//supprimer
function delete_user($pseudo){
    try{
    $req = ConnexionPDO() -> prepare('DELETE FROM user Where  pseudo = ? ;');
    $req -> execute(array($pseudo));
    }catch(PDOException $r){
        print"Erreur !".$e -> getMessage();
        return false;
    }
}

function update_user($colonne, $new_value, $condition, $value){
    try{
        $req = ConnexionPDO() -> prepare('UPDATE user SET ? = ? where ? = ?;');
// ? = ? : i.e l'user peut modifier tous (nom, premon, pays, date de naissance, ....)
        $req -> execute(array($colonne, $new_value, $condition, $value));

    }catch(PDOException $e){
        print "Erreur !".$e -> getMessage();
        return false;
    }
}
















?>
