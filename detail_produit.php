<?php
$page_name = 'Boutique';
?>

<?php require_once('entete.php'); ?>


 
<section id="contenu_site">
    <div class="div_gauche">
        <div class="trait"> Bonjour <?= $_SESSION['pseudo'] ?></div>
        <h1>Détail produit</h1>
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


$id = 0;
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
}

$produit = [];

for ($j = 0; $j < count($produits); $j++) {
    if ($produits[$j]['id'] == $id) {
        $produit['id'] = $produits[$j]['id'];
        $produit['designation'] = $produits[$j]['designation'];
        $produit['pu'] = $produits[$j]['pu'];
        $produit['qte'] = $produits[$j]['qte'];
        $produit['devise'] = $produits[$j]['devise'];
        $produit['image'] = $produits[$j]['image'];
    }
}


?>
<section id="liste_produits">


    <div class="produit">
        <img src="<?= $produit['image'] ?>" alt="">
        <h3><?= $produit['designation'] ?></h3>
        <h4><?= $produit['pu'] ?> <?= $produit['devise'] ?></h4>

        <h4>Quantité disponible : <?= $produit['qte'] ?></h4>
    </div>

    <div>
        <fieldset style="padding: 20px;">

             <?php if($produit['qte'] > 0): ?>

                <form action="detail_produit.php?id=<?= $produit['id']?>" method="post">
                    <input required autofocus style="height: 45px;padding-left:10px;with:150px!important;" min="1" max="<?= $produit['qte'] ?>" type="number" name="qte_commande" placeholder="Entrer la quantité">
                    <input type="submit" class="gradient-button gradient-button-1 " name="ajouter_panier" value="Ajouter au panier">
                </form>
            <?php else: ?>
                <div style="background-color: red; color:white;padding:10px;">
                    Rupture de stock
                </div>
            <?php endif; ?>

        </fieldset>


        <?php 
        
            if(isset($_POST['ajouter_panier'])){
                
                $qte_commande = $_POST['qte_commande'];
                
                $commande = $produit;

                $commande['qte'] = $qte_commande;

                $commandes = isset($_SESSION['commandes']) ?  $_SESSION['commandes'] : [];

                array_push($commandes, $commande);

                $_SESSION['commandes'] = $commandes;
                header('Location:commande.php');

            }
        ?>
    </div>



</section>
<?php require_once('pied.php') ?>