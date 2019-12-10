<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP multiplication</title>
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
                        <li class="nav__list-item"><a href="index.php" class="text-decoration-none text-reset">Afficher une table</a></li>
                        <li class="nav__list-item"><a href="multiselection.php" class="text-decoration-none text-reset">Multisélection</a></li>
                        <li class="nav__list-item"><a href="revision.php" class="text-decoration-none text-reset">Mode révision</a></li>
                        <li class="nav__list-item"><a href="superrevision.php" class="text-decoration-none text-reset">Super mode révision</a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="container-fluid pt-5">
        <div class="container affichage mt-5 pt-5">

            <div class="row">
                <h1 class="josephin text-white mx-auto mb-5">Table de multiplication</h1>
            </div>

            <div class="row d-block">
                <h2 class="text-center josephin text-white pt-2">Afficher une table</h2>
                <form action="#" class="indexForm">
                    <div class="form-row align-items-center">
                        <div class="col-12 d-flex justify-content-center">
                            <select class="custom-select" id="tablemultiplication">
                                <option selected disabled>Choisir</option>
                                <option value="1">Table de 1</option>
                                <option value="2">Table de 2</option>
                                <option value="3">Table de 3</option>
                                <option value="4">Table de 4</option>
                                <option value="5">Table de 5</option>
                                <option value="6">Table de 6</option>
                                <option value="7">Table de 7</option>
                                <option value="8">Table de 8</option>
                                <option value="9">Table de 9</option>
                                <option value="10">Table de 10</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-bg btn-sm text-white josephin mx-auto mt-3 mb-5">Valider</button>
                        </div>
                </form>
            </div>

            <div class="text-center indexanswer pb-4 mx-auto josephin">
            
            </div>

        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='js/script.js' async></script>
    <script>
        const myIndexForm = document.querySelector('.indexForm');

        myIndexForm.addEventListener('submit', function(e){
            e.preventDefault();

            indexOptions = document.querySelector('#tablemultiplication');

            fetch(`treatment.php?tableindexvalue=${indexOptions.value}`)
            .then(function(theIndexResponse){
                return theIndexResponse.text();
            })
            .then(function(indexDatas){
                const myIndexPara = document.querySelector('.indexanswer');
                myIndexPara.innerHTML = indexDatas;
            });

        })
    
    </script>

</body>

</html>