<?php



session_start();
$_SESSION['user'] = "Durant";
$_SESSION['mdp'] = "DD1";

$page = (isset($_GET["page"]))? $_GET["page"] : "home";

switch($page) {
    case "home" : $template = "produits.php";
    break;
    case "article" : $template = "article.php";
    break;
    case "connexion" : $template = "connexion.php";
    break;  
    case "deconnexion" : $template = deconnect();
    break;
    case "panier" : $template = connect();
    break;
    case "ajout" : $template = ajoutPanier();
    break;
    default : $template = "produits.php";
    }


    function connect() {
    
        if(isset($_POST['nom'])) {
            $_SESSION["user"] = $_POST['nom'];
        }
    
        if(isset($_SESSION["user"])) {
            return "panier.php";
        } else {
            return "connexion.php";
        }
    
    }
    
    function deconnect() {
    
        $_SESSION = [];
        session_destroy();
    
        return "produits.php";
    }
    
    function ajoutPanier() {

        $article = $_GET['art'];

        if(isset($_SESSION['panier'])) {
            // j'ajoute un produit (array push php)
            array_push($_SESSION['panier'], $article);
        } else {
            $_SESSION['panier'] = [];
            // et j'ajoute un produit
            array_push($_SESSION['panier'], $article);
        }

        return "article.php";
        
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

            <div>

                <?php if(!isset($_SESSION["user"])): ?>
                    <a href="index.php?page=connexion">Connexion</a>
                <?php else: ?>
                    <a href="index.php?page=deconnexion">Déconnexion</a>
                    <a href="index.php?page=panier">Mon panier</a>
                <?php endif ?>
            </div>
        </div>
    </header>

    <!-- code par page -->
    <?php require_once $template ?>
</body>
</html>


