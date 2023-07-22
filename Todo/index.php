<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>TODO LIST</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body style="background-image: url(https://fjwp.s3.amazonaws.com/blog/wp-content/uploads/2015/12/09112429/work-life-balance-working-from-home.jpg);background-size:cover;">

    <?php

    if (isset($_GET['suppresion_total'])) {
        $_SESSION['liste_taches'] = [];
    }

    
    $liste_taches =  isset($_SESSION['liste_taches']) ? $_SESSION['liste_taches'] : [];
    
    if(isset($_GET['supression_id'])){
        $supression_id = intval($_GET['supression_id']);

        $nouvelle_listes = [];

        for($j = 0; $j < count($liste_taches); $j++){

            if($liste_taches[$j]['id'] != $supression_id){
                array_push($nouvelle_listes, $liste_taches[$j]);
            } 
        }

        $liste_taches = $nouvelle_listes;
        $_SESSION['liste_taches'] = $liste_taches;
    }


    if (isset($_POST['ajouter'])) {

        $tache = [
            'id' => date('dmyHis'),
            'designation' => $_POST['designation'],
            'date' => $_POST['date'],
            'statut' => false
        ];

        array_push($liste_taches, $tache);

        $_SESSION['liste_taches'] = $liste_taches;

        // unset($_POST['ajouter']);
    }
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h1>Todo List</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <table class="table">
                                <tr>
                                    <td colspan="2">
                                        <input required name="designation" type="text" placeholder="Entrer la tâche" class="form-control">
                                    </td>
                                    <td colspan="2"><input required name="date" type="datetime-local" placeholder="Chosir la date et l'heure" class="form-control"> </td>
                                    <td>
                                        <input type="submit" name="ajouter" value="Ajouter" class="btn btn-success">
                                    </td>
                                </tr>
                            </table>
                        </form>

                        <table class="table table-striped table-bordered">

                            <tr>
                                <td>#</td>
                                <td>Désignation</td>
                                <td>Date </td>
                                <td>Statut </td>
                                <td>Action</td>
                            </tr>


                            <?php for ($i = 0; $i < count($liste_taches); $i++) : ?>
                                <tr>
                                    <td><?= $liste_taches[$i]['id'] ?></td>
                                    <td><?= $liste_taches[$i]['designation'] ?></td>
                                    <td><?= $liste_taches[$i]['date'] ?></td>
                                    <td>
                                        <?php

                                        if ($liste_taches[$i]['statut'] == true) {

                                            echo '<span class="btn btn-success"> Terminer</span>';
                                        } else {
                                            echo '<span class="btn btn-warning"> En cours</span>';
                                        }
                                        ?>

                                    </td>
                                    <td>
                                        <a href="?supression_id=<?= $liste_taches[$i]['id'] ?>" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endfor; ?>

                            <tr>
                                <td colspan="5" style="text-align:right;">
                                    <a id="suppresion_total" href="?suppresion_total=true" class="btn btn-danger">
                                        <i class="bi bi-trash"></i> Supprimer toutes les tâches
                                    </a>
                                </td>
                            </tr>
                        </table>



                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script>
        var suppresion_total = document.getElementById('suppresion_total');

        suppresion_total.addEventListener('click', function(e) {
            e.preventDefault();
            if (confirm('Voulez-vous vraiment vider les tâches ? La suppresion est sans retour !!!!!!')) {
                location.href = this.href;
            }
        })
    </script>
</body>

</html>