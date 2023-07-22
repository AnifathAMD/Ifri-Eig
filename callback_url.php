<?php 

if($_GET['transaction_id']){

    $headers = '';

    mail('johs@gmai.com', 'COmmande réussie', 
    "
        Bonjour....

        Sommaire: 

        <table style='color:white;'>

        </table>

    ",

        $headers
);
    mail(
        'admin@gmai.com',
        'COmmande réussie',
        "
        Bonjour Admin, 

        Sommaire: 

        <table>

        </table>

    ",

        $headers
    );


    $_SESSION['commandes'] = [];
    header('Location: commande.php?commande_success=true');
}
