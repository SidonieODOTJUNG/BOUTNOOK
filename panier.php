
<?php

require_once "tab.php";
$articles = $articles[$_GET["art"]];

?>


<section>
    <a href="index.php?page=home"><input type="submit" value="Retouner à la liste des produits" id="retourliste"></a></p>

    <h1>Bonjour <? ?> <? ?></h1>

    <p class="prespanier">Votre panier contient : </p>

    <article class="panier">
        <div>
            <img src="<?=$articles['image1']?>" alt="<?=$articles['nom']?>" id="imgpanier">
            <p><span><?= $articles['nom'] ?></span></p>
            <b>€<?= $articles['prix'] ?>.00</b> <br>
        </div>

        <div>
            <p><?= $articles['stock'] ?> articles en stock</p>
            <p><?= $articles['dimension'] ?></p>
        </div>
    </article>

</section>