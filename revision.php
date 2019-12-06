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

    <div class="container-fluid affichertable">

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


    <div class="container-fluid multiselection mb-5 pt-5">
        <div class="container mt-5">
            <div class="row pt-5 d-block">
                <h1 class="josephin text-white text-center mb-5">Mode Révision</h1>
                <h2 class="text-center  text-white josephin mt-5 mb-4">Choisissez une table et testez-vous!</h2>
            </div>

            <div class="row">
                <div class="col-12 d-block">
                    <form class="mx-autor" action="" method="post">
                        <div class="d-flex justify-content-center">
                            <select class="form-control custom-select" id="exampleFormControlSelect1"
                                name="thirdexercice">
                                <option disabled selected> Choisir</option>
                                <option value="1"> Table de 1</option>
                                <option value="2"> Table de 2</option>
                                <option value="3"> Table de 3</option>
                                <option value="4"> Table de 4</option>
                                <option value="5"> Table de 5</option>
                                <option value="6"> Table de 6</option>
                                <option value="7"> Table de 7</option>
                                <option value="8"> Table de 8</option>
                                <option value="9"> Table de 9</option>
                                <option value="10"> Table de 10</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-sm mt-3 mb-3">Valider</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row text-center d-flex justify-content-center">
                <?php
                        if (!empty($_POST) && isset($_POST['thirdexercice'])){
                            $randnb = rand(1, 10);
                            $thirdexercicevalue = $_POST['thirdexercice'];
                            $result = $randnb * $thirdexercicevalue;
                            echo 'Combien font '.$thirdexercicevalue.' x '.$randnb.' ? ';
                        }
    
                        if (!empty($_POST['result']) && isset($_POST['answer'])){
                            $answer = $_POST['answer'];
                            $result = $_POST['result'];
                            if ($result == $answer){
                                $won = 'Gagné! La réponse est bien ' .$result. ' . ';
                            }
                            else{
                                $lost = 'Perdu...mais on ne désespère pas. La réponse était ' .$result. ' . ';
                            }
                        }
                    ?>
            </div>

            <div class="row mt-5">
                <div class="col-12 d-block">
                    <form class="mx-autor" action="" method="post">
                        <div class="d-flex justify-content-center">
                            <input type="hidden" name="result" value="<?php echo $result ?>">
                            <input type="text" name="answer">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-sm mt-3 mb-3">Valider</button>
                        </div>
                        <div class="text-center">
                            <?php 
                                    if(isset($won)) echo $won;
                                    if(isset($lost)) echo $lost;
                                ?>
                    </form>
                </div>
            </div>





        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='js/script.js' async></script>



</body>

</html>