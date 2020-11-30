
<?php 
require_once "tab.php"
?>


    <section class="produit">
        <h1>Nos produits</h1>
        <div class="murproduit">
            <article>
                <div>
                    <img src="maquetteHTML/booknookHPnuit.jpg" alt="booknook Harry Potter">
                </div>
                <div>
                    <p><span><?= $HarryPotter['nom'] ?></span></p>
                    <p><?= $HarryPotter['description'] ?></p>
                    <b>€<?= $HarryPotter['prix'] ?>.00</b> <br>
                    <a href="index.php?page=article"><input type="submit" value="Acheter maintenant" id="acheter"></a>
                </div>
            </article>
            <article>
                <div>
                    <img src="maquetteHTML/booknooknoelnuit.jpg" alt="booknook edition de noël">
                </div>
                <div>
                    <p><span><?= $Noel['nom'] ?></span></p>
                    <p>C<?= $Noel['description'] ?></p>
                    <b>€<?= $Noel['prix'] ?>.00</b> <br>
                    <a href="index.php?page=article"><input type="submit" value="Acheter maintenant" id="acheter"></a>
                </div>
            </article>
            <article>
                <div>
                    <img src="maquetteHTML/boonookhalloweennuit.jpg" alt="booknook edition Halloween">
                </div>
                <div>
                    <p><span><?= $Halloween['nom'] ?></span></p>
                    <p><?= $Halloween['description'] ?></p>
                    <b>€<?= $Halloween['prix'] ?>.00</b> <br>
                    <a href="index.php?page=article"><input type="submit" value="Acheter maintenant" id="acheter"></a>
                </div>
            </article>
            <article>
                <div>
                    <img src="maquetteHTML/booknookruelle.jpg" alt="booknook vielle ruelle londonnienne">
                </div>
                <div>
                    <p><span><?= $Londre['nom'] ?></span></p>
                    <p><?= $Londre['description'] ?></p>
                    <b>€<?= $Londre['prix'] ?>.00</b> <br>
                    <a href="index.php?page=article"><input type="submit" value="Acheter maintenant" id="acheter"></a>
                </div>
            </article>
            <article>
                <div>
                    <img src="maquetteHTML/booknookLOTRgollum.jpg" alt="booknook seigneur des anneaux">
                </div>
                <div>
                    <p><span><?= $LOTR['nom'] ?></span></p>
                    <p><?= $LOTR['description'] ?></p>
                    <b>€<?= $LOTR['prix'] ?>.00</b> <br>
                    <a href="index.php?page=article"><input type="submit" value="Acheter maintenant" id="acheter"></a>
                </div>
            </article>
        </div>

    </section>

