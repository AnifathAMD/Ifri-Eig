<?php
session_start();
$_SESSION['pseudo'] = 'Tartempion';
$produits = [
    [
        'id' => 1,
        'designation' => 'Câble réseau RJ45 UTP plat | 1.8 m',
        'qte' => 20,
        'pu' => 120,
        'devise' => '$',
        'image' => 'https://www.solaris-store.com/71280-thickbox/cable-rj45-utp-bleu-1-8ml.jpg',
    ],
    [
        'id' => 2,
        'designation' => 'File électrique',
        'qte' => 11,
        'pu' => 102,
        'devise' => '$',
        'image' => 'https://www.travauxavenue.com/assets/components/phpthumbof/cache/Fils%20%C3%A9lectrique%20de%20couleur.5a3fe432a99c8f5666b5945a4b8d4575.jpg',

    ],
    [
        'id' => 3,
        'designation' => 'Matériel électrique photo stock.',
        'qte' => 30,
        'pu' => 155,
        'devise' => '$',
        'image' => 'https://thumbs.dreamstime.com/z/mat%C3%A9riel-%C3%A9lectrique-30388382.jpg',

    ],
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_name ?></title>
    <link rel="stylesheet" href="css/style.css?v=<?= date('His') ?>">
</head>

<body>

    <header>
        <div class="logo">
            <a href="index.php">Logo </a>
        </div>
        <nav class="menu">
            <ul>
                <li>
                    <a href="index.php" class="<?= $page_name == 'Acceuil' ? 'active' : ''; ?>">Accueil</a>
                </li>
                <li>
                    <a href="boutique.php" class="<?= $page_name == 'Boutique' ? 'active' : ''; ?>">Boutique</a>
                </li>
                <li>
                    <a href="commande.php" class="<?php if ($page_name == 'Commande') {
                                                        echo 'active';
                                                    } ?>">Commande</a>
                </li>
                <li>
                    <a href="contactez_nous.php" class="<?= $page_name == 'Contactez-nous' ? 'active' : ''; ?>">Contactez nous</a>
                </li>
            </ul>
        </nav>
    </header>