<?php require_once 'includes/nav1.php' ?>
<?php
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICON WEIGHTLIGHT -->
    <link rel="icon" type="image/svg" href="images/logo/WL.png" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
    <!-- utilities.css Représente le code css commun entre les pages -->
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/homeuser.css">
    <title>WeightLight</title>
</head>

<body>
    <main>
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->

        <?php
        include('database.php');
        // Return current date from the remote server
        $today = date("d/m/y");
        $day_less_1 = date("d/m/y", (time() - 1 * 86400));
        $day_less_2 = date("d/m/y", (time() - 2 * 86400));
        $day_less_3 = date("d/m/y", (time() - 3 * 86400));
        $day_less_4 = date("d/m/y", (time() - 4 * 86400));
        $day_less_5 = date("d/m/y", (time() - 5 * 86400));
        $day_less_6 = date("d/m/y", (time() - 6 * 86400));
        $day_less_7 = date("d/m/y", (time() - 7 * 86400));

        $search_cal_today = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                      WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                      AND c.dateCons = CURRENT_DATE";
        $result = mysqli_query($db, $search_cal_today);
        while ($donnees = mysqli_fetch_array($result)) {
            if ($donnees['SUM(calories)'] == null) {
                $cal_today = 0;
            } else {
                $cal_today = $donnees['SUM(calories)'];
            }
        }

        $search_cal_day_less_1 = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                      WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                      AND c.dateCons = CURRENT_DATE - 1";
        $result = mysqli_query($db, $search_cal_day_less_1);
        while ($donnees = mysqli_fetch_array($result)) {
            if ($donnees['SUM(calories)'] == null) {
                $cal_day_less_1 = 0;
            } else {
                $cal_day_less_1 = $donnees['SUM(calories)'];
            }
        }
        $search_cal_day_less_2 = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                      WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                      AND c.dateCons = CURRENT_DATE - 2";
        $result = mysqli_query($db, $search_cal_day_less_2);
        while ($donnees = mysqli_fetch_array($result)) {
            if ($donnees['SUM(calories)'] == null) {
                $cal_day_less_2 = 0;
            } else {
                $cal_day_less_2 = $donnees['SUM(calories)'];
            }
        }
        $search_cal_day_less_3 = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
       WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
        AND c.dateCons = CURRENT_DATE - 3";
        $result = mysqli_query($db, $search_cal_day_less_3);
        while ($donnees = mysqli_fetch_array($result)) {
            if ($donnees['SUM(calories)'] == null) {
                $cal_day_less_3 = 0;
            } else {
                $cal_day_less_3 = $donnees['SUM(calories)'];
            }
        }
        $search_cal_day_less_4 = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
        WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
        AND c.dateCons = CURRENT_DATE - 4";
        $result = mysqli_query($db, $search_cal_day_less_4);
        while ($donnees = mysqli_fetch_array($result)) {
            if ($donnees['SUM(calories)'] == null) {
                $cal_day_less_4 = 0;
            } else {
                $cal_day_less_4 = $donnees['SUM(calories)'];
            }
        }
        $search_cal_day_less_5 = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
        WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
        AND c.dateCons = CURRENT_DATE - 5";
        $result = mysqli_query($db, $search_cal_day_less_5);
        while ($donnees = mysqli_fetch_array($result)) {
            if ($donnees['SUM(calories)'] == null) {
                $cal_day_less_5 = 0;
            } else {
                $cal_day_less_5 = $donnees['SUM(calories)'];
            }
        }
        $search_cal_day_less_6 = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
        WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
        AND c.dateCons = CURRENT_DATE - 6";
        $result = mysqli_query($db, $search_cal_day_less_6);
        while ($donnees = mysqli_fetch_array($result)) {
            if ($donnees['SUM(calories)'] == null) {
                $cal_day_less_6 = 0;
            } else {
                $cal_day_less_6 = $donnees['SUM(calories)'];
            }
        }
        $search_cal_day_less_7 = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
        WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
        AND c.dateCons = CURRENT_DATE - 7";
        $result = mysqli_query($db, $search_cal_day_less_7);
        while ($donnees = mysqli_fetch_array($result)) {
            if ($donnees['SUM(calories)'] == null) {
                $cal_day_less_7 = 0;
            } else {
                $cal_day_less_7 = $donnees['SUM(calories)'];
            }
        }
        ?>

        <div class="headerInfo">
            <div class="greenBlock flex">
                <h3>Bonjour <?php
                            $search_query = "SELECT prenomUt FROM utilisateur WHERE email = '{$_SESSION['email']}'  ";
                            $result = mysqli_query($db, $search_query);
                            while ($donnees = mysqli_fetch_array($result)) {
                                echo $donnees['prenomUt'];
                            }
                            ?> ! Voici votre résumé quotidien !</h3>
                <span><?php echo $today ?></span>
            </div>

            <div class="flex">
                <div>
                    <p class="image"> Charger une photo</p>
                    <div class="flex">
                        <p class="weight">Poids :
                            <?php $search_query = "SELECT poids FROM utilisateur WHERE email = '{$_SESSION['email']}'  ";
                            $result = mysqli_query($db, $search_query);
                            while ($donnees = mysqli_fetch_array($result)) {
                                echo $donnees['poids'];
                            } ?> Kg </p>
                        <a href="modifyPoids.php"><i class="fas fa-edit"></i></a>
                    </div>

                </div>

                <div class="mg">
                    <p>Petit-déjeuner :

                        <?php
                        $search_query = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                        WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                        AND c.idType = 1
                        AND c.dateCons = CURRENT_DATE ";
                        $result = mysqli_query($db, $search_query);
                        while ($donnees = mysqli_fetch_array($result)) {
                            if ($donnees['SUM(calories)'] == null) {
                                echo "0 kcal";
                            } else {
                                echo $donnees['SUM(calories)'] . " kcal";
                            }
                        }
                        ?>
                    </p>
                    <p> Déjeuner :
                        <?php
                        $search_query = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                                         WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                                         AND c.idType = 2
                                         AND c.dateCons = CURRENT_DATE";
                        $result = mysqli_query($db, $search_query);
                        while ($donnees = mysqli_fetch_array($result)) {
                            if ($donnees['SUM(calories)'] == null) {
                                echo "0 kcal";
                            } else {
                                echo $donnees['SUM(calories)'] . " kcal";
                            }
                        }
                        ?></p>
                    <p> Collation : <?php
                                    $search_query = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                                         WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                                         AND c.idType = 3
                                         AND c.dateCons = CURRENT_DATE";
                                    $result = mysqli_query($db, $search_query);
                                    while ($donnees = mysqli_fetch_array($result)) {
                                        if ($donnees['SUM(calories)'] == null) {
                                            echo "0 kcal";
                                        } else {
                                            echo $donnees['SUM(calories)'] . " kcal";
                                        }
                                    }
                                    ?></p>
                    <p>Dîner : <?php
                                $search_query = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                                          WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                                         AND c.idType = 4
                                         AND c.dateCons = CURRENT_DATE";
                                $result = mysqli_query($db, $search_query);
                                while ($donnees = mysqli_fetch_array($result)) {
                                    if ($donnees['SUM(calories)'] == null) {
                                        echo "0 kcal";
                                    } else {
                                        echo $donnees['SUM(calories)'] . " kcal";
                                    }
                                }
                                ?></p>
                    <p>Total de calories : <?php
                                            $search_query = "SELECT SUM(calories) FROM repas r INNER JOIN consommer c ON r.idRepas = c.idRepas
                                             WHERE c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                                            AND c.dateCons = CURRENT_DATE";
                                            $result = mysqli_query($db, $search_query);
                                            while ($donnees = mysqli_fetch_array($result)) {
                                                if ($donnees['SUM(calories)'] == null) {
                                                    echo "0 kcal";
                                                } else {
                                                    echo $donnees['SUM(calories)'] . " kcal";
                                                }
                                            }
                                            ?></p>
                </div>


                <div class="mg mg-2">
                    <p>Nombre de Repas :

                        <?php
                        $var = 0;
                        $search_query_1 = "SELECT COUNT(*) FROM type t 
                                            INNER JOIN consommer c 
                                            ON t.idType = c.idType 
                                            WHERE c.idType = 1
                                            AND c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                                            AND c.dateCons = CURRENT_DATE";
                        $result_1 = mysqli_query($db, $search_query_1);
                        while ($donnees_1 = mysqli_fetch_array($result_1)) {
                            if (!empty($donnees_1[0])) {
                                $var++;
                            }
                        }
                        $search_query_2 = "SELECT COUNT(*) FROM type t 
                                            INNER JOIN consommer c 
                                            ON t.idType = c.idType 
                                            WHERE c.idType = 2
                                            AND c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                                            AND c.dateCons = CURRENT_DATE";
                        $result_2 = mysqli_query($db, $search_query_2);
                        while ($donnees_2 = mysqli_fetch_array($result_2)) {

                            if (!empty($donnees_2[0])) {
                                $var++;
                            }
                        }
                        $search_query_3 = "SELECT COUNT(*) FROM type t 
                                            INNER JOIN consommer c 
                                            ON t.idType = c.idType 
                                            WHERE c.idType = 3
                                            AND c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                                            AND c.dateCons = CURRENT_DATE";
                        $result_3 = mysqli_query($db, $search_query_3);
                        while ($donnees_3 = mysqli_fetch_array($result_3)) {

                            if (!empty($donnees_3[0])) {
                                $var++;
                            }
                        }
                        $search_query_4 = "SELECT COUNT(*) FROM type t 
                                            INNER JOIN consommer c 
                                            ON t.idType = c.idType 
                                            WHERE c.idType = 4
                                            AND c.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                                            AND c.dateCons = CURRENT_DATE";
                        $result_4 = mysqli_query($db, $search_query_4);
                        while ($donnees_4 = mysqli_fetch_array($result_4)) {

                            if (!empty($donnees_4[0])) {
                                $var++;
                            }
                        }
                        echo $var . " repas pris";
                        ?></p>
                    <p>
                        <?php
                        $search_query = "SELECT s.nomSport,s.idSport,s.duree FROM sport s INNER JOIN pratiquer p ON s.idSport = p.idSport
                                         WHERE p.idUser = ( SELECT idUser FROM utilisateur WHERE email = '{$_SESSION['email']}' )
                                         AND p.dateSport = CURRENT_DATE";
                        $result = mysqli_query($db, $search_query);
                        
                            echo "Sport : ";
                            if($result->num_rows == 0){
                                echo "Pas de sport de la journée";
                            }else{
                            while ($donnees = mysqli_fetch_array($result)) {

                                echo $donnees['nomSport'] . " ( "  . $donnees['duree']. " minutes )" ." <a href='deleteSport.php?idSport=";
                                echo $donnees['idSport'] . "'";
                                echo "><i class='fas fa-trash'></i></a>";
                               
                                echo "<a href='modifySport.php?idSport=";
                                echo $donnees['idSport'] . "'";
                                echo "><i class='fas fa-edit'></i></a>";
                            }
                        }
                         
                            
                        

                        ?>

                    </p>

                </div>
            </div>

            <?php

            ?>
        </div>
        <div style="width:100%; margin-top:5rem">
            <canvas id="myChart"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
        </div>
    </main>

    <script>
        var vartoday = <?php echo json_encode($today) ?>;
        var day_less_1 = <?php echo json_encode($day_less_1) ?>;
        var day_less_2 = <?php echo json_encode($day_less_2) ?>;
        var day_less_3 = <?php echo json_encode($day_less_3) ?>;
        var day_less_4 = <?php echo json_encode($day_less_4) ?>;
        var day_less_5 = <?php echo json_encode($day_less_5) ?>;
        var day_less_6 = <?php echo json_encode($day_less_6) ?>;
        var day_less_7 = <?php echo json_encode($day_less_7) ?>;
        var xValues = [day_less_7, day_less_6, day_less_5, day_less_4, day_less_3, day_less_2, day_less_1, vartoday];

        var cal_today = <?php echo json_encode($cal_today) ?>;
        var cal_day_less_1 = <?php echo json_encode($cal_day_less_1) ?>;
        var cal_day_less_2 = <?php echo json_encode($cal_day_less_2) ?>;
        var cal_day_less_3 = <?php echo json_encode($cal_day_less_3) ?>;
        var cal_day_less_4 = <?php echo json_encode($cal_day_less_4) ?>;
        var cal_day_less_5 = <?php echo json_encode($cal_day_less_5) ?>;
        var cal_day_less_6 = <?php echo json_encode($cal_day_less_6) ?>;
        var cal_day_less_7 = <?php echo json_encode($cal_day_less_7) ?>;
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [cal_day_less_7, cal_day_less_6, cal_day_less_5, cal_day_less_4, cal_day_less_3, cal_day_less_2, cal_day_less_1, cal_today],
                    label: 'Calories',
                    borderColor: '#fe9124',
                    fill: false
                }]
            },
            options: {
                responsive: true,

                legend: {
                    display: true,

                }
            }


        });
    </script>
</body>


</html>