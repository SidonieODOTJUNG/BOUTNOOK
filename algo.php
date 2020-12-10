<!-- nombre mystère version PHP -->


<?php 
// point entrée du script
session_start();

// 1 je vérifie les données reçues (et je vérifie que j'ai bien les données nessécaires)
var_dump($_GET);
var_dump($_POST);

// 2. j'ai besoin du nombre à trouver
// ne se génère que s'il n'existe pas, s'il existe, il ne doit pas se régénérer



    if(!$mystere) {
        $mystere = floor(random_int(0,100));
    } 

var_dump($mystere);

$saisie = -1;
?>

<form action="algo.php?action=verif" method="POST">
    <!-- faire un routage pour get -->
    <label for="saisie">Entrez un nombre entre 0 et 100</label>
    <input type="number" name="saisie" id="saisie">
    <input type="submit" value="Vérifier" name="verif" id="verif">  
    <!-- j'informe le serveur que je veux vérifier -->
    <input type="submit" value="rejouer" name="rejouer" id="rejouer">
    <!-- j'informe le serveur que je veux rejouer -->
    
</form>



<?php


$_SESSION['saisie'] = [$_POST['saisie']];
$saisie = $_POST['saisie'];

var_dump($_SESSION['saisie']);

// while($saisie != $mystere) {
//     if($saisie < $mystere) {
//         echo "<p>Le nombre mystere est plus grand</p>";
//     } elseif($saisie > $mystere) {
//         echo "<p>Le nombre mystere est plus petit</p>";
//     } else {
//         echo "<p>BRAVO!!!</p>";
//         echo "<p>Vous avez trouvé le nombre mystere : </p>".$mystere;
//     }
// }
// on ne peut pas se servir de la boucle while car pour que le serveur puisse renvoyer sa réponse, il doit terminer son traitement
// on part sur l'appel à une fonction pour le bouton vérif, on génère une réponse en fonction des données reçues
?>
