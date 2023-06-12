<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Recette Q&E</title>
	<link rel="icon" href="img/Q&E.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="recette.css">
   
	

</head>


<body>
	
	<nav>
		
		<label class="logo"> Quick&Easy</label>
		<ul>
			<li> <a class="active"href="index.php">Accueil</a> 
			</li>
			<li> <a href="profil.php">Profil</a> 
			</li>
			<li> <a href="index.php">Contact</a> 
			</li>
		</ul>
	</nav>
	
	  <br>
	  <button class="ajouter-recette-button" onclick="window.location.href = 'recette_ajoute.html';">Ajouter une recette</button>
	  
	<div id="div_contenu">
		<br><br><br>
		<div class="top-recettes">
		  <h2 style="font-family: cursive; display: flex; flex-direction: row;"><span style="margin-right: 5px;">Top</span>
            <span>Recettes</span></h2>
		  <input id="searchbar" onkeyup="rechercheRecette()" type="text" name="rechercher" placeholder="Rechercher une recette">
		</div>
		<ol id="ls_plat">
			<?php
                include 'db_function.php'; 
                $res = display_recette();
                if ($res) {
                  foreach ($res as $row) {
                    echo "
                    <li class='recettes' onClick='link(".$row['id_recette'].")'>
                    <div class='recipe'>
                        <img src=".$row['photo']." alt=''>
                        <div class='recipe-overlay'>
                        <div class='recipe-name'>".$row['nom_recette']."</div>
                        </div>
                    </div>
                    </li>
                    
                    ";
                  }
                }

			?>
		</ol>
			<script>
        function link(id_recette)
        {
          
          window.location.href = "get_id_recette.php?id_recette=" + id_recette;
        }

			      function rechercheRecette() {
      let input = document.getElementById('searchbar').value.toLowerCase();
      let recettes = document.getElementsByClassName('recettes');

      for (let i = 0; i < recettes.length; i++) {
        let recette = recettes[i].querySelector('.recipe-name').innerHTML.toLowerCase();

        if (!recette.includes(input)) {
          recettes[i].style.display = "none";
        } else {
          recettes[i].style.display = "list-item";
        }
      }
    }
			</script>

						

<br><br><br>
</html>
