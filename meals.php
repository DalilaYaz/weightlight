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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/meals.css">
    <script type="text/javascript" src="./js/meals.js"></script>
    <title>WeightLight</title>
</head>

<body>

    <div class="main">
        <!-- DIV1 : INFO -->
        <div class="rowTop info">

            <p class="textColor">Glisser pour déposez vos repas dans la liste <i class="fas fa-info-circle"></i> </p>

            <div>
                <button type="submit" class="btnPrimary" value="Enregistrer"><a href="">Enregistrer</a></button>

                <button type="submit" class="btnSecondary" value="Supprimer"><a href="">Supprimer</a></button>
            </div>
        </div>

        <div class="greenLine"></div>

        <!-- DIV 2 : LEFT SIDE -->

        <div class="program">

            <div class="rowProgram">
                <!--=================== LEFT COL ====================-->
                <div class="leftCol">
                    <!-- PART 1 : INFO -->
                    <div class="rowSearch">
                        <form action="">
                            <div>
                                <input type="search" id="search" name="search" aria-label="Search through site content" placeholder="Recherche..."><i class="fas fa-search" id="searchIcon"></i>
                                <button type="submit" class="btnPrimary" value="Ajouter">Ajouter</button>
                            </div>
                        </form>
                    </div>


                    <!-- PART 2 : MEALS -->

                    <!-- les repas tableaux -->
                <!--=================== RIGHT COL ====================-->

                <div class="rightCol">
                    <!-- <h2 class="tableTitle">Programme de Repas <br> <span>Du 17/01/2022 Au 23/01/2022</span>
                    </h2> -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Lundi</th>
                                <th scope="col">Mardi</th>
                                <th scope="col">Mercredi</th>
                                <th scope="col">Jeudi</th>
                                <th scope="col">Vendrerdi</th>
                                <th scope="col">Samedi</th>
                                <th scope="col">Dimanche</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <th class="rotate">
                                    <span>Petit <br> Déjeuner</span>
                                </th>

                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                            </tr>

                            <tr>

                                <th class="rotate">
                                    <span> Déjeuner</span>
                                </th>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                            </tr>

                            <tr>

                                <th class="rotate">
                                    <span> Collation</span>
                                </th>

                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                            </tr>

                            <tr>


                                <th class="rotate">
                                    <span> Dîner</span>
                                </th>

                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                                <td><i class="fas fa-cloud-upload-alt" ondragstart="start(event)" onDragOver="return over(event)" onDrop="return drop(event)" onDragLeave="leave(event)"></i></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>





</body>
<script type="text/javascript">
    form = document.querySelector('form')

form.addEventListener('submit', function(e) {
    inpValue = document.getElementById("search").value
    fetchData4mAPI(inpValue)
})

async function fetchData4mAPI(inpVal) {
    app_id = '4668f675';
    app_key = '83ebe392045317318b82a28e72035092';
    baseURl = `https://api.edamam.com/search?q=${inpVal}&app_id=${app_id}&app_key=${app_key}&to=4`;
    result = await fetch(baseURl);
    datas = await result.json()
    console.log(datas)
    genrateHTML(datas.hits);
}

function genrateHTML(results) {
    showINHTML = '';
    results.map(result => {
       /* showINHTML += `
        <div class="col-3 my-3">
        <div class="card">
            <div class="card-body">
                <img src="${result.recipe.image}" alt="" class='img-fluid'>
                <h6 class=' text-center my-2 text-truncate'>${result.recipe.label}</h6>
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class=' align-self-stretch mx-auto my-auto'>Calories: ${result.recipe.calories.toFixed(2)}</h6>
                    <a href='${result.recipe.url}' class='btn btn-link align-self-stretch'>View Recipe</a>
                </div>
            </div>
        </div>
    </div> 
        `*/
        showINHTML += `
        <div class="meal" id="5" draggable="true">
            <img src="images/meals/pasta (1).png" alt="">

                 <div class="mealInfo">
                        <h3> Pâtes à la crème de Parmesan</h3>
                        <h4>200 calories</h4>
                </div>
                
        </div>`
        document.querySelector('.meals').innerHTML = showINHTML;

    })}
</script>

</html>