<?php
$page_name = 'Boutique';
?>

<?php require_once('entete.php'); ?>

<section id="contenu_site">
    <div class="div_gauche">
        <div class="trait"> Bonjour <?= $_SESSION['pseudo'] ?></div>
        <h1>Boutique</h1>
        <p class="texte">
            <br>
            Achat rapide et simple en quelques minuites !
        </p>

        <br><br><br>
    </div>
    <div class="div_droite">

    </div>
</section>
<?php



?>
<section id="liste_produits">

    <?php for ($i = 0; $i < count($produits); $i++) : ?>
        <div class="produit">
            <img src="<?= $produits[$i]['image'] ?>" alt="">
            <h3><?= $produits[$i]['designation'] ?></h3>
            <h4><?= $produits[$i]['pu'] ?> <?= $produits[$i]['devise'] ?></h4>
            <a href="detail_produit.php?id=<?= $produits[$i]['id'] ?>" class="gradient-button gradient-button-1 ">Acheter</a>
        </div>
    <?php endfor; ?>



</section>
<?php require_once('pied.php') ?>