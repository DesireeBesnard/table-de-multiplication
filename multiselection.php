<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Table de multiplication</title>
</head>

<body>

    <div class="container-fluid">

        <div>
            <div class="navbar navbar-default navbar-fixed-top">
            <div class="brand-icon">Super<span class="color-change">Maths</span>PHP</div>
                <div class="menu-icon">
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>
            </div>
            <div class="nav">
                <div class="nav__content">
                    <ul class="nav__list list-unstyled">
                        <li class="nav__list-item"><a href="index.php" class="text-decoration-none text-reset">Afficher
                                une table</a></li>
                        <li class="nav__list-item"><a href="multiselection.php"
                                class="text-decoration-none text-reset">Multisélection</a></li>
                        <li class="nav__list-item"><a href="revision.php" class="text-decoration-none text-reset">Mode
                                révision</a></li>
                        <li class="nav__list-item"><a href="superrevision.php"
                                class="text-decoration-none text-reset">Super mode révision</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid multiselection pt-5">
        <div class="container mt-5">
            <div class="row pt-5 d-block">
                <h1 class="josephin text-white text-center mb-5">Multisélection</h1>
                <h2 class="text-center  text-white josephin mb-4">Afficher une ou plusieurs tables</h2>
                <div class="row pt-2">
                    <form class="mx-auto multiselectionForm" action="#" name="checkselectform" >

                        <div class="d-flex text-white josephin">
                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="1" class="mr-2 mt-1 secondtable"> <label for="table_1">Table du 1</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="2" class="mr-1 mt-1 secondtable"> <label for="table_2">Table du 2</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="3" class="mr-1 mt-1 secondtable"> <label for="table_3">Table du 3</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="4" class="mr-1 mt-1 secondtable"> <label for="table_4">Table du 4</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="5" class="mr-1 mt-1 secondtable"> <label for="table_5">Table du 5</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="6" class="mr-1 mt-1 secondtable"> <label for="table_6">Table du 6</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="7" class="mr-1 mt-1 secondtable"> <label for="table_7">Table du 7</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="8" class="mr-1 mt-1 secondtable"> <label for="table_8">Table du 8</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="9" class="mr-1 mt-1 secondtable"> <label for="table_9">Table du 9</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="secondtable[]" value="10" class="mr-1 mt-1 secondtable"> <label for="table_10">Table du 10</label></div></div>

                        <div class="d-flex justify-content-center pt-2">
                            <button type="submit" class="btn btn-bg text-white josephin btn-sm mt-5 mx-auto">Valider</button>
                        </div>

                    </form>
                </div>

                <div class="row d-flex flex-wrap multiselectionanswer mt-5">

                </div>

            </div>

        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='js/script.js' async></script>
    <script>
        const myMultiselectionForm = document.querySelector('.multiselectionForm');

        myMultiselectionForm.addEventListener('submit', function(e){
            e.preventDefault();

            multiselectionOptions = document.querySelectorAll('.secondtable');
       
            //création d'un formulaire virtuel
            datas = new FormData(myMultiselectionForm);
            
            //Ajout des éléments dans le formulaire virtuel
            // php récupère ce que je mets dans le append seulement
            datas.append('secondtable[]', multiselectionOptions.value);
          
            //Promesse ajax
            fetch('treatment.php', {
                method: "POST",
                body: datas
            }).then (function(theResponse){
                return theResponse.text();
            }).then ( function( result){
                myMultiselectionDiv = document.querySelector('.multiselectionanswer');
                myMultiselectionDiv.innerHTML = result;
            })
            
})
    
    </script>
</body>

</html>