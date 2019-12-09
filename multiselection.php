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
                    <form class="mx-auto secondtable" action="multiselection.php" method="post">

                        <div class="d-flex text-white josephin">
                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="1" id="table_1"
                                    class="mr-2 mt-1"> <label for="table_1">Table du 1</label>
                            </div>

                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="2" id="table_2"
                                    class="mr-1 mt-1"> <label for="table_2">Table du 2</label>
                            </div>

                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="3" id="table_3"
                                    class="mr-1 mt-1"> <label for="table_3">Table du 3</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="4" id="table_4"
                                    class="mr-1 mt-1"> <label for="table_4">Table du 4</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="5" id="table_5"
                                    class="mr-1 mt-1"> <label for="table_5">Table du 5</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="6" id="table_6"
                                    class="mr-1 mt-1"> <label for="table_6">Table du 6</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="7" id="table_7"
                                    class="mr-1 mt-1"> <label for="table_7">Table du 7</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="8" id="table_8"
                                    class="mr-1 mt-1"> <label for="table_8">Table du 8</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="9" id="table_9"
                                    class="mr-1 mt-1"> <label for="table_9">Table du 9</label></div>

                            <div class="d-flex mr-3"><input type="checkbox" name="table[]" value="10" id="table_10"
                                    class="mr-1 mt-1"> <label for="table_10">Table du 10</label></div>
                        </div>

                        <div class="d-flex justify-content-center pt-2">
                            <button type="submit" class="btn btn-bg text-white josephin btn-sm mt-5 mx-auto">Valider</button>
                        </div>

                    </form>
                </div>

                <div class="row d-flex flex-wrap mt-5">

                    <?php

                    if (!empty($_POST) && isset($_POST['table'])){

                        foreach($_POST['table'] as $tableauvaleurs){
                            // echo "<div class=' mr-5 mb-5 pl-5'>";
                            echo "<div class='bg-white multiselectionresult mx-auto josephin mb-4 pt-3 pb-3'>";
                            echo '<h3 class="text-center"> Table du '.$tableauvaleurs.'</h3>';
                                for ($i=1; $i <= 10; $i++){
                                    echo "<div class='text-center'>";
                                    echo $tableauvaleurs.'x' .$i. '=' .$i*$tableauvaleurs;
                                    echo" </div>";
                                }
                            echo "</div>";
                        }

                    }    
                    ?>

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