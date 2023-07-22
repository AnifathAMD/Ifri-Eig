<?php
$page_name = 'Acceuil';

?>
<?php require_once('entete.php'); ?>

<section id="contenu_site">
    <div class="div_gauche">
        <div class="trait"> 
            Bonjour <?= $_SESSION['pseudo'] ?>
        </div>
        <h1>électricien</h1>
        <h3>service <br> rapide</h3>
        <p class="texte">
            ce n'est plus un secret pour personne<br>
            que nous gerons plusieurs services en <br> matière d'électricité. Il n'y a pas de<br> petit ou grand travail pour nous.<br>
            Chaque client recevra une attention<br> appropriée.<br>
        </p>

        <p class="parent_lien">
            <a href="" class="gradient-button gradient-button-1 ">commencez maintenant</a>
        </p>
        <br><br><br>
    </div>
    <div class="div_droite">
        <img src="images/img.png" alt="">
    </div>
</section>

<?php require_once('pied.php') ?>