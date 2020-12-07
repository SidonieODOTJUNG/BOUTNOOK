
<?php 

// session_start();

// $_SESSION['utilisateur'] = '';

// // destruction lorsque l'utilisateur clique sur déco (il faut pense à permettre à l'utilisateur de se déco)
// $_SESSION = array(); // on réinitialise $_SESSION (tableau vide)
// session_destroy(); // on detruit la session (attention cela surpprime tout donc seulement quand l'utilisateur le décide)
// unset($_SESSION) ;  //on supprime le tableau session (tout en gardant le principe de la session)


$page = (isset($_GET["page"]))? $_GET["page"] : "home";

switch($page) {
    case "home" : $template = "produits.php";
    break;
    case "article" : $template = "article.php";
    break;
    case "panier" : $template = "panier.php";
    break;
    case "connexion" : $template = "connexion.php";
    break;  
    default : $template = "produits.php";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="maquetteHTML/style.css">
    <title>BoutNooks</title>
</head>
<body>
    <header>
        <div class="headerimg">
            <div class="legende">
                <h1>BOUTNOOKS</h1>
                <h2>Faites vivre une aventure à vos livres...</h2>
            </div>
            <img src="maquetteHTML/bookheader.jpg" alt="livre accueil BOUTNOOKS">
        </div>
    </header>

    <!-- code par page -->
    <?php require_once $template ?>
</body>
</html>