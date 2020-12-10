<?php
// $nom_valide = "Durant";
// $mdp_valide = "DD1";


// if (isset($_POST['nom']) && isset($_POST['mdp'])) {  // teste si les variables sont définies

// 	if ($nom_valide == $_POST['nom'] && $mdp_valide == $_POST['mdp']) {
// 		session_start ();

// 		$_SESSION['login'] = $_POST['nom'];
// 		$_SESSION['pwd'] = $_POST['mdp'];

// 		// on redirige notre visiteur vers une page de notre section membre
// 		// header ('location: page_membre.php');
// 	}
// 	else {
// 		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
// 		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
// 		// puis on le redirige vers la page d'accueil
// 		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
// 	}
// }
// else {
// 	echo 'Les variables du formulaire ne sont pas déclarées.';
// }
 
?>

<form method="POST" action="index.php?page=panier" class="creacompte">
    <input type="text" name="nom" id="nom" value="Entrez votre nom"> <br>
    <input type="password" name="mdp" id="mdp" value="Entrez votre mot de passe"> <br>
    <input type="submit" value="Connexion">
</form>
