<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'John Doe' ?></title>
</head>

<body>

    <h1> Formation PHP & MySql </h1>

    <h1> <?php echo 'Je vais à l\'école.'; ?> </h1>
    <h1> <?php echo "Je vais à l'école."; ?> </h1>
    <?php
    // TODO

    $age = 19;

    // echo $age;

    $aire = 14.73;

    $date_de_naissance = '22-06-1990';

    $is_admin = false;


    echo $date_de_naissance;

    echo '<hr>';


    $L = 30;
    $l = 14;

    $p =   2 * ($L + $l);


    echo $p;



    //    if($p > 100){
    //         echo "Périmètre plus de 100";
    //    }
    //    else{
    //         echo "Périmètre moins de 100";
    //    }

    $note  = 18;

    // if ($note == 15) {
    //     echo 'Mention Bien';
    // } else if ($note == 18) {
    //     echo 'Mention Très  Bien';
    // } else if ($note == 18) {
    //     echo 'Mention Très  Bien';
    // } else if ($note == 18) {
    //     echo 'Mention Très  Bien';
    // } else if ($note == 18) {
    //     echo 'Mention Très  Bien';
    // } else {
    //     echo 'Mention non connue !';
    // }

    switch($note){
        case 15:
            echo 'Mention bien';
            break;
        case 18: 
            echo 'Très bien';
            break;
        default:
            echo 'Mention non connue! ';
            break;
    }



        $rule = false;
        if($is_admin ){
            $rule = true;
        }
        else {
            $rule = false;
        }

        $rule = $is_admin ? true : false;




        for($i=0; $i< 10; $i++){
            echo "<h1> $i </h1>";
        }

    ?>

</body>

</html>