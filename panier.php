


<?php
require_once "tab.php";
?>

<div>

    <h1>Bonjour <?= $_SESSION['user'] ?></h1>

    <p class="prespanier">Votre panier contient : </p>

    <table>
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Qté</th>
                <th scope="col">Prix unitaire</th>
                <th scope="col">Prix total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION["panier"] as $elem): ?>
                <tr>
                    <th scope="row"><?= $articles[$elem]["nom"] ?></th>   
                    <td><?= $articles[$elem]['description'] ?></td>
                    <td>1</td>   
                    <!-- penser à ajouter les quantitées -->
                    <td><?= $articles[$elem]['prix'] ?></td>
                    <td><?= $articles[$elem]['prix'] ?></td>
                    <!-- penser à effectuer le calcul en fonction de la quantité -->
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>

</div>
