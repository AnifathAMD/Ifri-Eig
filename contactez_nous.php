 <?php
    $page_name = 'Contactez-nous';
    ?>

 <?php require_once('entete.php'); ?>


 <section id="contenu_site">
     <div class="div_gauche">
         <div class="trait"> Bonjour <?= $_SESSION['pseudo'] ?> </div>
         <h1>Contactez-nous</h1>
         <h3>Aide </h3>
         <p class="texte">
             ce n'est plus un secret pour personne<br>
             que nous gerons plusieurs services en <br> matière d'électricité. Il n'y a pas de<br> petit ou grand travail pour nous.<br>
             Chaque client recevra une attention<br> appropriée.<br>
         </p>
         <p class="parent_lien">
             <a href="tel:+29966876068" class="gradient-button gradient-button-1 ">Appelez-nous </a>
             <!-- <a href="https://api.whatsapp.com/send?phone=+29966876068" class="gradient-button gradient-button-1 ">Appelez-nous </a> -->
         </p>
         <br><br><br>
     </div>
     <div class="div_droite">
         <img src="https://us.123rf.com/450wm/maridav/maridav1103/maridav110300034/9097607-casque-femme-d-op%C3%A9rateur-de-service-client-avec-casque-souriant-en-regardant-la-cam%C3%A9ra-belle-race-mi.jpg?ver=6" alt="">
     </div>
 </section>
 <?php require_once('pied.php') ?>