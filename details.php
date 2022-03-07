<?php require_once 'includes/nav1.php' ?>
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
    <link rel="stylesheet" href="css/details.css">
    <title>WeightLight</title>
</head>

<body>



    <div class="cards">
        <div class="card1">
            <p class="desc1">Votre journal alimentaire pour le : 02/02/2022</p>

        </div>

        <div class="card2">
            <div class="row underline">
                <div class="row">
                    <img src="images/meals/breakfast.png" alt="">
                    <p class="mealType">PETIT <br> DÉJEUNER</p>
                </div>

                <div class="icons row">


                

                  <!-- Trigger/Open The Modal -->
                    <button id="myBtn"><i class="fas fa-info-circle"></i></button>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Some text in the Modal..Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>

                    </div>





                    
                    <i class="fas fa-plus-circle"></i>
                    <i class="fas fa-pen-square"></i>
                </div>
            </div>


            <div class="row underline">
                <div class="row">
                    <img src="images/meals/lunch.png" alt="">
                    <p class="mealType">DÉJEUNER</p>
                </div>

                <div class="icons row">
                    <i class="fas fa-info-circle"></i>
                    <i class="fas fa-plus-circle"></i>
                    <i class="fas fa-pen-square"></i>
                </div>
            </div>

            <div class="row underline">
                <div class="row">
                    <img src="images/meals/collation.png" alt="">
                    <p class="mealType">COLLATION</p>
                </div>

                <div class="icons row">
                    <i class="fas fa-info-circle"></i>
                    <i class="fas fa-plus-circle"></i>
                    <i class="fas fa-pen-square"></i>
                </div>
            </div>

            <div class="row underline">
                <div class="row">
                    <img src="images/meals/dinner.png" alt="">
                    <p class="mealType">DîNER</p>
                </div>

                <div class="icons row">
                    <i class="fas fa-info-circle"></i>
                    <i class="fas fa-plus-circle"></i>
                    <i class="fas fa-pen-square"></i>
                </div>
            </div>



        </div>
    </div>

<script src="js/details.js"></script>

</body>


</html>