<!DOCTYPE html>
<html>
<head>
  <title>Profil Utilisateur</title>
  <link rel="stylesheet" href="stylePr.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <?php 
  session_start();
  include 'db_function.php'; 
  include 'function.php'; 
  if (isset($_SESSION['id'])) {

    $id = $_SESSION['id'];
    $res = info_user($id);
    if ($res) {
      foreach ($res as $row) {
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $date_naissance = date_to_dmy($row['Date_de_naissance']);
        $sexe = $row['sexe'];
        $email = $row['email'];
        $photo_cover= $row['photo_de_couverture'];
        $photo_profile= $row['photo_de_profile'];
        $mdp = $row['mot_de_passe'];
      }
    }
  }else{
    header('Location: connexion.html'); 
        exit();
  }
  ?>
  <?php
      // Vérifiez si le formulaire a été soumis et si un fichier a été téléchargé
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['cover-upload'])) {
            // Obtenez les informations du fichier
            $coverFile = $_FILES['cover-upload'];

            if ($coverFile['error'] === 0) {
              // Déplacez les fichiers téléchargés vers l'emplacement souhaité
              $coverPath =  'img/'.$coverFile['name'];
      
              move_uploaded_file($coverFile['tmp_name'], $coverPath);
              $photo_cover = $coverPath;
              update_user('photo_de_couverture',$photo_cover,'id_utilisateur',$id);
            }
        }

        if (isset($_FILES['profile-upload'])) {
          // Obtenez les informations du fichier
          $profileFile  = $_FILES['profile-upload'];

          if ($profileFile ['error'] === 0) {
            // Déplacez les fichiers téléchargés vers l'emplacement souhaité
            $profilePath  =  'img/'.$profileFile ['name'];
    
            move_uploaded_file($profileFile['tmp_name'], $profilePath );
            $photo_profile = $profilePath;
            update_user('photo_de_profile',$photo_profile,'id_utilisateur',$id);
          }
        }
      }
    ?>

<form id="upload-form" action="" method="POST" enctype="multipart/form-data">
  <div class="profile-cover">
    <div class="upload-overlay">
      <label for="cover-upload" class="upload-label">
        <i class="fas fa-camera"></i>
      </label>
      <input type="file" id="cover-upload" name="cover-upload" class="upload-input" accept="image/*">
    </div>
    <?php
      echo "<img src='".$photo_cover."' alt='Photo de couverture'>";
    ?>
  </div>

  <div class="profile-picture">
    <div class="upload-overlay">
      <label for="profile-upload" class="upload-label">
        <i class="fas fa-camera"></i>
      </label>
      <input type="file" id="profile-upload" name="profile-upload" class="upload-input" accept="image/*">
    </div>
    <?php
        echo "<img src='".$photo_profile."' alt='Photo de profil'>";
    ?>
  </div>
</form>
<?php
if (isset($_POST['modifier-informations'])) {
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $date_naissance = $_POST['date_naissance'];
  $email = $_POST['email'];
  $sexe = $_POST['sexe'];

  // Effectuer les mises à jour dans la base de données
  update_user('prenom', $prenom, 'id_utilisateur', $id);
  update_user('nom', $nom, 'id_utilisateur', $id);
  update_user('date_de_naissance', $date_naissance, 'id_utilisateur', $id);
  update_user('email', $email, 'id_utilisateur', $id);
  update_user('sexe', $sexe, 'id_utilisateur', $id);

  // Rediriger vers la page de profil mise à jour
  header('Location: profil.php');
  exit();
}
?>

<div class="card-table" id="informations-card">
  <h2>Informations générales</h2>
  <div class="card-content">
    <form action="" method="POST">
      <label for="prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom" value="<?php echo $prenom; ?>" required><br>

      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom" value="<?php echo $nom; ?>" required><br>

      <label for="date_naissance">Date de naissance:</label>
      <input type="text" id="date_naissance" name="date_naissance" value="<?php echo $date_naissance; ?>" required><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>

      <label for="sexe">Sexe:</label>
      <select id="sexe" name="sexe" required>
        <option value="Homme" <?php if ($sexe == "Homme") echo "selected"; ?>>Homme</option>
        <option value="Femme" <?php if ($sexe == "Femme") echo "selected"; ?>>Femme</option>
      </select><br>

      <button type="submit" name="modifier-informations">Modifier les informations</button>
    </form>
  </div>
</div>


  <div class="card-table" id="commentaires-card">
    <h2>Commentaires</h2>
    <div class="card-content">
    <?php
    $res = info_commentaire($id);
      if ($res) {
        foreach ($res as $row) {
          echo "<p>".$row['contenu']."</p>";
        }

      }
      ?>
    </div>
  </div>

  <div class="card-table" id="favories-card">
    <h2>Recettes favorites</h2>
    <div class="card-content">
    <?php
    $res = info_recette_favoris($id);
      if ($res) {
        foreach ($res as $row) {
          echo "<p>".$row['nom_recette']."</p>";
        }

      }
      ?>
  </div>

  <div class="card-table" id="recettes-card">
    <h2>Mes recettes</h2>
    <div class="card-content">
    <?php
    $res = info_recette($id);
      if ($res) {
        foreach ($res as $row) {
          echo "<p>".$row['nom_recette']."</p>";
        }

      }
      ?>
  </div>
    </div>  
  </div>

  <div class="card-table" id="parametres-card">
    <h2>Paramètres</h2>
    <div class="card-content">
      <div class="changer-mot-de-passe" onclick="toggleChangerMotDePasse()">
        <p>Changer mot de passe</p>
      </div>
      <div id="champ-mot-de-passe" style="display: none;">

        <form action="" method="POST">
          <label for="old-password">Ancien mot de passe:</label>
          <input type="password" id="old-password" name="old-password" required><br>
          <label for="new-password">Nouveau mot de passe:</label>
          <input type="password" id="new-password" name="new-password" required><br>
          <label for="confirm-password">Confirmer le mot de passe:</label>
          <input type="password" id="confirm-password" name="confirm-password" required><br>
          <button type="submit" name="mdp">Modifier le mot de passe</button>
        </form>
        <?php
          if (isset($_POST['mdp'])) {
            $old_password = $_POST['old-password'];
            $new_password = $_POST['new-password'];
            $confirm_password = $_POST['confirm-password'];

            if($old_password == $mdp){
              if($new_password == $confirm_password){
                update_user('mot_de_passe',$new_password,'id_utilisateur',$id);
              }else{
                // confirm mot_de_passe incorrect
                echo "incorrect";
              }
            }else{
              // ancien mot_de_passe est faux
              echo "faux";
            }
          }
        ?>
      </div>
      <div class="supprimer-compte" onClick="confirmerSuppressionCompte()">
        <p>Supprimer le compte</p>
      </div>
     <br>
      <form action="" method ="post">
  	    <button type="submit" class="deconnexion-btn">Déconnexion</button>
      </form>
      <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          unset($_SESSION['id']);
          header('Location: connexion.html'); // <- chemin vers Cnx
          exit();
        }
      ?>
    </div>
  </div>
  <script>

    function confirmerSuppressionCompte() {
      var confirmed = confirm("Voulez-vous vraiment supprimer votre compte ?");
        if (confirmed) {
            // Exécuter la fonction de suppression du compte
            window.location.href = 'delete_account.php';
        
        } else {
            // Rediriger ou afficher un message d'annulation
            exit("Suppression du compte annulée.");
        }
    }

  </script>

  <script src="script.js"></script>
  <script>
    // Fonction pour filtrer les commentaires par date
    function filtrerCommentairesParDate(date) {
      const commentaires = document.querySelectorAll('#commentaires-card .card-content p');
      commentaires.forEach(commentaire => {
        const commentaireDate = commentaire.getAttribute('data-date');
        if (commentaireDate === date) {
          commentaire.style.display = 'block';
        } else {
          commentaire.style.display = 'none';
        }
      });
    }

    // Exemple d'utilisation : filtrer par la date '2023-05-19'
    filtrerCommentairesParDate('2023-05-19');

    // Fonction pour afficher ou masquer le champ de modification de mot de passe
    function toggleChangerMotDePasse() {
      const champMotDePasse = document.getElementById('champ-mot-de-passe');
      champMotDePasse.style.display = (champMotDePasse.style.display === 'none') ? 'block' : 'none';
    }

    // Fonction pour supprimer le compte
    function supprimerCompte() {
      // Effectuer les actions nécessaires pour supprimer le compte de l'utilisateur
      alert('Compte supprimé avec succès.');
      // Rediriger vers une page d'accueil ou de déconnexion
      window.location.href = 'accueil.php';
    }
  </script>
  <script>
  // Obtenez une référence vers le formulaire
  const form = document.getElementById('upload-form');

  // Ajoutez un gestionnaire d'événement pour écouter les modifications dans les champs de téléchargement de fichiers
  form.addEventListener('change', () => {
    // Envoyez automatiquement le formulaire dès qu'une modification est détectée
    form.submit();
  });
</script>
</body>
</html>

