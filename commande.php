 <?php
    $page_name = 'Commande';
    ?>

 <?php require_once('entete.php'); ?>


 <section id="contenu_site">
     <div class="div_gauche">
         <div class="trait">Bonjour <?= $_SESSION['pseudo'] ?></div>
         <h1>Commande</h1>
          

         <p class="texte">
             Liste de vos commandes !
         </p>

         <?php if (isset($_GET['vider_panier'])) : ?>
             <p style="background-color: green; color:white;font-size:1.3em;font-weight:bold;padding:10px;">
                 Opération de suppresion des commandes réussie!
             </p>
         <?php endif; ?>

     </div>
     <div class="div_droite">
     </div>
 </section>

 <section id="commande">
     <?php
        $listes = ['12 Monkeys', 'Flash', 'Arrow', 'Shadow Hunter', 'Redemption'];

        for ($i = 0; $i < count($listes); $i++) {

            // echo $listes[$i];
            // echo '<br>';
        }

        $user = ['name' => 'John Doe', 'Phone' => '+22966876068', 'pseudo' => 'johndoe'];

        // echo $user['pseudo'];


        $orders = isset($_SESSION['commandes']) ? $_SESSION['commandes'] : [];

        $total = 0;


        ?>
     <table>
         <tr>
             <th>Désignation</th>
             <th>Qté</th>
             <th>Prix Unitaire</th>
             <th>Prix total</th>
         </tr>

         <?php for ($j = 0; $j < count($orders); $j++) :  ?>

             <tr>
                 <td><?php echo $orders[$j]['designation'] ?></td>
                 <td><?php echo $orders[$j]['qte'] ?></td>
                 <td><?php echo $orders[$j]['pu'] ?> <?php echo $orders[$j]['devise'] ?></td>
                 <td><?php echo $orders[$j]['qte'] * $orders[$j]['pu'] ?> $</td>
             </tr>
             <?php

                $total += ($orders[$j]['qte'] * $orders[$j]['pu']);

                ?>
         <?php endfor; ?>
         <?php $total_xof = $total * 643.50; ?>

         <?php if ($total_xof > 0) : ?>
             <tr>
                 <td colspan="3">Total ( $ ) </td>
                 <td><?php echo $total ?> </td>
             </tr>

             <tr>
                 <td colspan="3">Total ( XOF )</td>
                 <td> <?= str_replace('.', ',', str_replace(',', ' ', number_format($total_xof, 2))) ?> </td>
             </tr>

         <?php else : ?>

             <tr>
                 <td colspan="4">Panier vide</td>
             </tr>

         <?php endif; ?>

     </table>

     <?php if ($total_xof > 0) : ?>
         <p style="text-align: right;padding-top:10px">

             <input class="control_input" type="text" placeholder="Entrer votre Nom et prénom"><br>
             <input class="control_input" type="text" placeholder="Entrer votre adresse email"><br>
             <input class="control_input" type="text" placeholder="Entrer votre adresse de livraison"><br>
             <kkiapay-widget amount="<?= (int) $total_xof ?>" key="1" callback="https://expertitlab.com/get-help"></kkiapay-widget>

             <!-- <a href="" class="gradient-button gradient-button-1 ">Payer</a> -->
             &nbsp; ou <a href="vider_panier.php" class="gradient-button gradient-button-1 " style="background:black;color:white;">Vider le panier</a>
         </p>
     <?php endif; ?>
 </section>
 <?php require_once('pied.php') ?>