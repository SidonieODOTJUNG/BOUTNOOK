<?php

require_once "tab.php";
$articles = $articles[$_GET["art"]];

?>


<section>
    <article class="article">
        <div>
            <img src="<?=$articles['image1']?>" alt="<?=$articles['nom']?>">
            <div class="listimg">
                <img src="<?=$articles['image1']?>" alt="<?=$articles['nom']?>">
                <img src="<?=$articles['image2']?>" alt="<?=$articles['nom']?>">
                <img src="<?=$articles['image1']?>" alt="<?=$articles['nom']?>">
            </div>
        </div>

        <div>
            <p><span><?= $articles['nom'] ?></span></p>
            <p><?= $articles['description'] ?></p>
            <p><?= $articles['stock'] ?> articles en stock</p>
            <p><?= $articles['dimension'] ?></p>
            <b>€<?= $articles['prix'] ?>.00</b> <br>
            <a href="index.php?page=connexion"><input type="submit" value="Ajouter au panier" id="ajoutpanier"></a>
            
            
        </div>

        <a href="index.php?page=home"><input type="submit" value="Retouner à la liste des produits" id="retourliste"></a></p>


    </article>

</section>


