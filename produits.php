
<?php 
require_once "tab.php";

?>


    <section class="produit">
        <h1>Nos produits</h1>
        <div class="murproduit">
            <?php foreach($articles as $index => $booknook) : ?>
                <article>
                    <div>
                        <img src="$booknook['image1']" alt="$booknook['nom']">
                    </div>
                    <div>
                        <p><span><?= $booknook['nom'] ?></span></p>
                        <p><?= $booknook['description'] ?></p>
                        <b>€<?= $booknook['prix'] ?>.00</b> <br>
                        <a href="index.php?page=article&art=<?= $index ?>"><input type="submit" value="Acheter maintenant" id="acheter"></a>
                    </div>
                </article>
            <?php endforeach ?>
        </div>
    </section>

